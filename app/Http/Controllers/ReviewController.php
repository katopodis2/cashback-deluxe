<?php

namespace App\Http\Controllers;

use App\services\CommentService;
use Illuminate\Http\Request;
use App\services\RatingService;
class ReviewController extends Controller
{
    private $commentService;
    private $ratingsService;
    public function __construct(CommentService $commentService, RatingService $ratingsService )
    {
        $this->commentService = $commentService;
        $this->ratingsService= $ratingsService;
    }


    public function createReview(Request $request)
    {

       $this->commentService->createComment($request);
       $this->ratingsService->createRating($request);
       $this->ratingsService->buyAgain($request);

    }
}
