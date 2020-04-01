<?php


namespace App\Http\Controllers;


class MyCashBackController extends BaseController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('myCashBack');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myWallet()
    {
        return view('myWallet');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myClaim()
    {
        return view('myBackClaim');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function payoutHistory()
    {
        return view('payoutHistory');
    }
}
