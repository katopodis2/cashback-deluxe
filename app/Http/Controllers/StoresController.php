<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class StoresController extends BaseController
{

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
}
