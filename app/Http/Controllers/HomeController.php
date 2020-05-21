<?php

namespace App\Http\Controllers;

use App\Models\CashBackReview;
use App\Services\cashBackReviewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends BaseController
{
    public $cashBackReviewService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(cashBackReviewService $cashReviewService)
    {
        $this->cashBackReviewService = $cashReviewService;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cashBackReview ()
    {
        $reviews = $this->cashBackReviewService->cashBackReview();
        return view('cashBackReview.review', compact('reviews'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCashBackReview(Request $request)
    {
        $rev = $this->cashBackReviewService->storeCashBackReview($request->all());
        if ($rev){
            return redirect()->back();
        }
        return $this->redirectBackWithErrors("", "", $this->cashBackReviewService);
    }
}

