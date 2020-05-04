<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 06.04.2020
 * Time: 13:19
 */

namespace App\Services;


use App\models\AgainBuy;
use App\models\Rating;
use App\Models\Store;
use App\Models\User;
use App\Validators\ReviewValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingService extends BaseService
{

    /**
     * RatingService constructor.
     * @param ReviewValidator $reviewValidator
     */
    public function __construct(ReviewValidator $reviewValidator)
    {
        $this->baseValidator = $reviewValidator;
    }

    /**
     * @param $data
     * @param $store
     * @return bool
     */
    public function createRating($data, $store)
    {

        $data['user_id'] = auth()->id();
        $data['store_id'] = $store->id;

        if (!$this->validate($this->baseValidator, $data)) {
            return false;
        }

        return Rating::create($data);
//        if ($request->support_quality || $request->delivery_speed || $request->product_description_compliance) {
//
//            Rating::create([
//                'user_id' => $request->user_id,
//                'store_id' => $request->store_id,
//                'overall' => $request->overall ? $request->overall : null,
//                'delivery_speed' => $request->delivery_speed ? $request->delivery_speed : null,
//                'support_quality' => $request->support_quality ? $request->support_quality : null,
//                'product_description_compliance' => $request->product_description_compliance ? $request->product_description_compliance : null,
//
//            ]);
//
//        }
    }

    /**
     * @param $data
     * @param $store
     * @return bool
     */
    public function updateRating($data, $store)
    {
        if (!$this->validate($this->baseValidator, $data)) {
            return false;
        }

        $rat = Rating::where('store_id', $store->id)->where('user_id', \auth()->id());
        if (!$rat){
            return false;
        }

        return $rat->update($data);
//
    }


    /**
     * @param $storeId
     * @return array
     */
    public function getStoreRating($storeId)
    {
        $ratings = Rating::where('store_id', $storeId)
            ->get();
        $deliverySpeed = $ratings->where('delivery_speed', "!=", 'null')->pluck('delivery_speed')->avg();
        $overall = $ratings->where('overall', "!=", 'null')->pluck('overall')->avg();
        $supportQuality = $ratings->where('support_quality', "!=", 'null')->pluck('support_quality')->avg();
        $productDescriptionCompliance = $ratings->where('product_description_compliance', "!=", 'null')->pluck('product_description_compliance')->avg();

        $storeRatings = [
            'overall' => !$overall ? 0 : round($overall,1),
            'support_quality' => !$supportQuality ? 0 : round($supportQuality,1),
            'delivery_speed' => !$deliverySpeed ? 0 : round($deliverySpeed,1),
            'product_description_compliance' => !$productDescriptionCompliance ? 0 : round($productDescriptionCompliance,1)
        ];

        return $storeRatings;

    }

    /**
     * @param $data
     * @param $store
     * @return mixed
     */
    public function buyAgain($data, $store)
    {
        $data['user_id'] = auth()->id();
        $data['store_id'] = $store->id;

        return AgainBuy::create($data);
//        if ($request->buy_again) {
//
//            AgainBuy::create([
//                'user_id' => $request->user_id,
//                'store_id' => $request->store_id,
//                'yes' => $request->buy_again == 'yes' ? "yes" : null,
//                'no' => $request->buy_again == 'no' ? "no" : null,
//
//            ]);
//
//
//        }

    }

    /**
     * @param $data
     * @param $store
     * @return mixed
     */
    public function updateBuyAgain($data, $store)
    {
        $buyAg = AgainBuy::where('store_id', $store->id)->where('user_id', \auth()->id());

        if (!$buyAg){
            return false;
        }

        return $buyAg->update($data);
    }

    /**
     * @param $store
     * @return mixed
     */
    public function isReview($store)
    {
        return Rating::where('store_id', $store->id)->where('user_id', \auth()->id())->first(['id']);
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function isStoreBySlug($slug)
    {
        return Store::where('slug', $slug)->first(['id']);
    }


    /**
     * @param $slug
     */
    public function getMyReviewRatingThisStore($slug, $columns)
    {
        $store = $this->getStoreBySlug($slug);
        if (!$store){
            return false;
        }
        $rating = Rating::where('store_id', $store->id)->where('user_id', \auth()->id())->first($columns);
        if (empty($rating)){
            return false;
        }
        return  array_filter($rating->toArray());
    }

    /**
     * @param $slug
     * @return array
     */
    public function getAllReviewRatingThisStore($slug)
    {
        $store = $this->getStoreBySlug($slug);
        if (!$store){
            return false;
        }
        $rating = Rating::where('store_id', $store->id)->paginate(15);
        if (empty($rating)){
            return false;
        }

        return  $rating->groupBy('user_id');
    }

    /**
     * @param $store_id
     * @return mixed
     */
    public function getUserIdsNames($store_id)
    {
        $user_ids = Rating::where('store_id', $store_id)->pluck('user_id');
        $users = User::whereIn('id', $user_ids)->paginate(15)->pluck('name','id');
        return $users;
    }

    /**
     * @param $slug
     * @return array
     */
    public function getAllReviewBuyAgainThisStore($slug)
    {
        $store = $this->getStoreBySlug($slug);
        if (!$store){
            return false;
        }
        $buyAg = AgainBuy::where('store_id', $store->id)->paginate(15);
        if (empty($buyAg)){
            return false;
        }

        return  $buyAg->groupBy('user_id');
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getBuyAgainBySlug($slug)
    {
        $store = $this->getStoreBySlug($slug);
        if (!$store){
            return false;
        }

        $buyAg = AgainBuy::where('store_id', $store->id)->where('user_id', \auth()->id())->first(['is_buy_again']);
        return $buyAg->toArray();
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getStoreBySlug($slug)
    {
        return Store::where('slug', $slug)->first(['id']);
    }


}
