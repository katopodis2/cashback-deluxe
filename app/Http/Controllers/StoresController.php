<?php


namespace App\Http\Controllers;


use App\Services\RatingService;
use App\Services\StoreService;
use Illuminate\Http\Request;

class StoresController extends BaseController
{

    protected $ratingsService;

    /**
     * StoresController constructor.
     * @param StoreService $storeService
     */
    public function __construct(StoreService $storeService, RatingService $ratingService)
    {
        $this->baseService = $storeService;
        $this->ratingsService = $ratingService;

    }

    public function allStores()
    {
        $this->baseService->getAllStores();

    }

    public function shop($slug)
    {
        $store = $this->baseService->isStoreBySlug($slug);
        if (!$store){
            return redirect()->route('home');
        }
        $thisStoreRating = $this->ratingsService->getStoreRating($store->id);
        $is_review = $this->isRev($store);

        return view("stores.storePage", compact('slug', 'is_review', 'thisStoreRating'));
    }



    /**
     * @param Request $request
     */
    public function storeCat(Request $request)
    {
        $this->baseService->storeCategory($request->id);

    }

    /**
     * @param $store
     * @return bool
     */
    public function isRev($store)
    {
        $is_review = false;
        if ($this->baseService->isReview($store)){
            $is_review = true;
        }

        return $is_review;
    }
}
