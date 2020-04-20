<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 06.04.2020
 * Time: 13:19
 */

namespace App\services;


use App\models\AgainBuy;
use App\models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingService
{
    public function createRating($request)
    {

        if ($request->support_quality || $request->delivery_speed || $request->product_description_compliance) {

            Rating::create([
                'user_id' => $request->user_id,
                'store_id' => $request->store_id,
                'overall' => $request->overall ? $request->overall : null,
                'delivery_speed' => $request->delivery_speed ? $request->delivery_speed : null,
                'support_quality' => $request->support_quality ? $request->support_quality : null,
                'product_description_compliance' => $request->product_description_compliance ? $request->product_description_compliance : null,

            ]);

        }
    }

    public function getStoreRating($storeId)
    {
        $ratings = Rating::where('store_id', $storeId)
            ->get();
        $deliverySpeed = $ratings->where('delivery_speed', "!=", 'null')->pluck('delivery_speed')->avg();
        $overall = $ratings->where('overall', "!=", 'null')->pluck('overall')->avg();
        $supportQuality = $ratings->where('support_quality', "!=", 'null')->pluck('support_quality')->avg();

        $storeRatings = [
            'overall' => !$overall ? 0 : $overall,
            'support_quality' => !$supportQuality ? 0 : $supportQuality,
            'delivery_speed' => !$deliverySpeed ? 0 : $deliverySpeed
        ];

        return $storeRatings;

    }

    public function buyAgain(Request $request)
    {
        if ($request->buy_again) {

            AgainBuy::create([
                'user_id' => $request->user_id,
                'store_id' => $request->store_id,
                'yes' => $request->buy_again == 'yes' ? "yes" : null,
                'no' => $request->buy_again == 'no' ? "no" : null,

            ]);


        }

    }


}