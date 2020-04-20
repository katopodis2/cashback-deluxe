<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 07.04.2020
 * Time: 11:51
 */

namespace App\services;

use App\models\Store;


class StoreService
{
    public function getAllStores()
    {
        $stores = Store::get();
        return $stores;
    }

    public function getStoreById($storeId)
    {
        $store = Store::where(function ($q) use ($storeId) {
            $store = $q->where('id', $storeId)->first();
            $store->update(['popularity' => $store->popularity + 1]);
        })->first();
        return $store;

    }


    public function topTenStores()
    {
        $stores = Store::orderBy('popularity', 'desc')->take(10)->get();
        return $stores;

    }

}