<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 07.04.2020
 * Time: 11:51
 */

namespace App\Services;

use App\Models\Rating;
use App\models\Store;


class StoreService
{
    public function getAllStores()
    {
        $stores = Store::get();
        return $stores;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getStoreBySlug($slug)
    {
        $store = Store::where(function ($q) use ($slug) {
            $store = $q->where('slug', $slug)->first(['id', 'slug', 'popularity']);
            $store->update(['popularity' => $store->popularity + 1]);
        })->first();
        return $store;

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
     * @param $store
     * @return mixed
     */
    public function isReview($store)
    {
        return Rating::where('store_id', $store->id)->where('user_id', \auth()->id())->first(['id']);
    }


    public function topTenStores()
    {
        $stores = Store::orderBy('popularity', 'desc')->take(10)->get();
        return $stores;

    }

}
