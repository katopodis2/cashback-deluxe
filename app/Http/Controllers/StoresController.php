<?php


namespace App\Http\Controllers;


use App\Services\StoreService;
use Illuminate\Http\Request;

class StoresController extends BaseController
{

    /**
     * StoresController constructor.
     * @param StoreService $storeService
     */
    public function __construct(StoreService $storeService)
    {
        $this->baseService = $storeService;

    }

    public function allStores()
    {
        $this->baseService->getAllStores();

    }

    public function store()
    {
//        return view("stores.cashback");
        return view("stores.storePage");
    }

    public function review()
    {
        return view("stores.storePage");
    }

    public function addReview()
    {
        return view("stores.addReview");
    }

    public function storeReview(Request $request)
    {
        dd($request->all());
    }

    public function storeCat(Request $request)
    {
        $this->baseService->storeCategory($request->id);

    }
}
