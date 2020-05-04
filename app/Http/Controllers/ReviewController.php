<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\services\CommentService;
use Illuminate\Http\Request;
use App\services\RatingService;
use Illuminate\Support\Facades\DB;

class ReviewController extends BaseController
{
    /**
     * @var CommentService
     */
    private $commentService;
    /**
     * @var RatingService
     */
    private $ratingsService;

    /**
     * ReviewController constructor.
     * @param CommentService $commentService
     * @param RatingService $ratingsService
     */
    public function __construct(CommentService $commentService, RatingService $ratingsService)
    {
        $this->commentService = $commentService;
        $this->ratingsService = $ratingsService;
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function review($slug)
    {
        $store = $this->ratingsService->isStoreBySlug($slug);
        if (!$store) {
            return redirect()->route('home');
        }

        $is_review = $this->isRev($store);

        $rating = $this->ratingsService->getAllReviewRatingThisStore($slug);
        $buyAg = $this->ratingsService->getAllReviewBuyAgainThisStore($slug);
        $comments = $this->commentService->getAllReviewCommentThisStore($slug);
        $thisStoreRating = $this->ratingsService->getStoreRating($store->id);
        if (!$rating || !$comments || !$buyAg) {
            return redirect()->route('store.shop', $slug);
        }

        $data['rating'] = $rating->toArray();
        $data['buyAg'] = $buyAg->toArray();
        $data['comments'] = $comments->toArray();

        $users = $this->ratingsService->getUserIdsNames($store->id);
        foreach ($users as $user_id => $name) {
            $dat[$user_id] = array_merge(
                array_filter(array_shift($data['rating'][$user_id])),
                array_filter(array_shift($data['comments'][$user_id])),
                array_filter(array_shift($data['buyAg'][$user_id])),
                ['username' => $name]);
        }

        return view("stores.storePage", compact("slug", 'is_review', 'dat', 'thisStoreRating'));
    }

    /**
     * @param $store
     * @return bool
     */
    public function isRev($store)
    {
        $is_review = false;
        if ($this->ratingsService->isReview($store)) {
            $is_review = true;
        }

        return $is_review;
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function addReview($slug)
    {
        $store = $this->getStoreBySlug($slug);
        if (!$store) {
            return redirect()->route('home');
        }

        if ($this->ratingsService->isReview($store)) {
            return redirect()->route('store.shop', $slug);
        }

        return view("stores.addReview", compact('slug'));
    }


    /**
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeReview(Request $request, $slug)
    {
        $store = $this->getStoreBySlug($slug);

        if (empty($store)) {
            return redirect()->route('home');
        }

        DB::beginTransaction();
        $com = $this->commentService->createComment($request->only(['comm']), $store);
        if (!$com) {
            DB::rollBack();
            return $this->redirectBackWithErrors("", "", $this->commentService);
        }
        $rat = $this->ratingsService->createRating($request->only(['overall', 'support_quality', 'delivery_speed', 'product_description_compliance']), $store);
        if (!$rat) {
            DB::rollBack();
            return $this->redirectBackWithErrors("", "", $this->ratingsService);
        }
        $buy = $this->ratingsService->buyAgain($request->only(['is_buy_again']), $store);
        if (!$buy) {
            DB::rollBack();
            return $this->redirectBackWithErrors("", "", $this->ratingsService);
        }
        DB::commit();

        flash('review created', 'success');
        return redirect()->route('store.shop', $slug);

    }

    public function editReview($slug)
    {
        $store = $this->getStoreBySlug($slug);
        if (!$store) {
            return redirect()->route('home');
        }

        $columns = [
            'id',
            'overall',
            'delivery_speed',
            'support_quality',
            'product_description_compliance',
        ];
        $itemRat = $this->ratingsService->getMyReviewRatingThisStore($slug, $columns);
        $itemBuyAg = $this->ratingsService->getBuyAgainBySlug($slug);
        $itemComm = $this->commentService->getMyReviewCommentThisStore($slug);
        $item = array_merge($itemRat, $itemBuyAg, $itemComm);
        if (!$item) {
            flash('item not found!', 'danger');
            return redirect()->back();
        }

        return view("stores.editReview", compact('slug', 'item'));
    }

    /**
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateReview(Request $request, $slug)
    {
        $store = $this->getStoreBySlug($slug);

        if (empty($store)) {
            return redirect()->route('home');
        }

        DB::beginTransaction();
        $com = $this->commentService->updateComment($request->only(['comm']), $store);
        if (!$com) {
            DB::rollBack();
            return $this->redirectBackWithErrors("", "", $this->commentService);
        }
        $rat = $this->ratingsService->updateRating($request->except(['comm', 'is_buy_again', '_token']), $store);
        if (!$rat) {
            DB::rollBack();
            return $this->redirectBackWithErrors("", "", $this->ratingsService);
        }
        $buy = $this->ratingsService->updateBuyAgain($request->only(['is_buy_again']), $store);
        if (!$buy) {
            DB::rollBack();
            return $this->redirectBackWithErrors("", "", $this->ratingsService);
        }
        DB::commit();

        flash('review update', 'success');
        return redirect()->route('store.shop', $slug);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myReview($slug)
    {
        $data['rating'] = $this->ratingsService->getMyReviewRatingThisStore($slug, ['overall']);
        $data['comments'] = $this->commentService->getMyReviewCommentThisStore($slug);

        if (!$data['rating'] || !$data['comments']) {
            return redirect()->route('store.shop', $slug);
        }

        return view('stores.myReview', compact('data', 'slug'));
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getStoreBySlug($slug)
    {
        return $this->ratingsService->getStoreBySlug($slug);
    }


}
