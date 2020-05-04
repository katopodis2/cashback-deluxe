<?php
$overall = array_shift($thisStoreRating);
$happyCust = round(array_sum($thisStoreRating)/count($thisStoreRating),1);
$happyCustPerc = $happyCust*100/5;
?>

<div class="adidasReviewsMarginRight w-100">
    <div class="adidasReviews">
        <div>
            <a href="{{route("store.shop", $slug)}}">
                <button class="buttonSFeedback" id="buttonSFeedbackGrey">{{__("global.cashBack")}}</button>
            </a>
            <a href="{{route("store.review",$slug)}}">
                <button class="buttonSFeedback"
                        id="buttonSFeedbackYellow">{{__("global.reviews")}}</button>
            </a>
        </div>
        @if($is_review)
            <a href="{{route("store.myReview", $slug)}}">
                <button class="buttonSFeedback"
                        id="buttonSFeedbackOrange">{{__("global.myRev")}}</button>
            </a>
        @else
            <a href="{{route("store.addReview", $slug)}}">
                <button class="buttonSFeedback"
                        id="buttonSFeedbackOrange">{{__("global.leaveReviewUpp")}}</button>
            </a>
        @endif
    </div>
    <div class="totalRatingTitlePaddingResponsive">
        <div class="totalRatingTitle">{{__("global.totalRating")}} | {{__("global.totalNumRev")}}11
        </div>
        <div class="totalRatingFlex">
            <div class="totalRating">{{$overall}}</div>
            <div>
                @include("stores.star", [$overall])
            </div>
        </div>
    </div>

    <div class="categoriesPadding">
        <div>
            <div class="percentReviews">
                <div class="totalRatingTitle">{{$happyCustPerc}}{{__("global.happyCustomers")}}</div>
                @foreach($thisStoreRating as $k => $v)

                    <div class="totalDivsAndColorsDivsFlex">
                        <div>
                            <div class="percentReviewsBold">{{$v}}</div>
                            <div>{{__("global.$k")}}</div>
                        </div>
                        <div class="greenAndGrayDivsMyFeedback">
                            <div class="green1" style="width: {{$v*100/5}}%"></div>
                            <div class="gray1" style="width: {{100-$v*100/5}}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="reviewsDiv">
                @foreach($dat as $it)

                    <div class="reviewsBorder">
                        <div class="reviewsFlex">
                            <div class="reviewsUser">{{$it['username']}}</div>
                            <div>
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < $it['overall'])
                                        <img src="{{asset('images/Star_full.svg')}}" class="review_star">
                                    @else
                                        <img src="{{asset('images/Star_empty.svg')}}" class="review_star">
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <div style="width: 500px">
                            @foreach($it as $key => $value)
                                @if($key == "advantages" || $key == "disadvantages" || $key == "comment")
                                    <div class="shop_rev">
                                        <p style="font-weight: bold !important;">{{$key}}:</p>
                                        <p>{{$value}}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="datasFlex">
                            <div>{{$it['created_at']}}</div>
                        </div>
                    </div>
                @endforeach
                {{--                                <div class="reviewsBorder">--}}
                {{--                                    <div class="reviewsFlex">--}}
                {{--                                        <div class="reviewsUser">User Name</div>--}}
                {{--                                        <div>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor--}}
                {{--                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices--}}
                {{--                                        gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.--}}
                {{--                                    </div>--}}
                {{--                                    <div class="datasFlex">--}}
                {{--                                        <div>23.03.2020</div>--}}
                {{--                                        <div class="likeDislikeFlex">--}}
                {{--                                            <div>{{__("global.reviewHelpful")}}</div>--}}
                {{--                                            <div>( 0 )</div>--}}
                {{--                                            <div class="likeDislikeMediaFlex">--}}
                {{--                                                <img src="./images/like.png"/>--}}
                {{--                                                <div>( 0 )</div>--}}
                {{--                                                <img src="./images/dislike.png"/>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="reviewsBorder">--}}
                {{--                                    <div class="reviewsFlex">--}}
                {{--                                        <div class="reviewsUser">User Name</div>--}}
                {{--                                        <div>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                            <img src="./images/starAdidas.png"/>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor--}}
                {{--                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices--}}
                {{--                                        gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.--}}
                {{--                                    </div>--}}
                {{--                                    <div class="datasFlex">--}}
                {{--                                        <div>23.03.2020</div>--}}
                {{--                                        <div class="likeDislikeFlex">--}}
                {{--                                            <div>{{__("global.reviewHelpful")}}</div>--}}
                {{--                                            <div class="likeDislikeMediaFlex">--}}
                {{--                                                <img src="./images/like.png"/>--}}
                {{--                                                <div>( 0 )</div>--}}
                {{--                                                <img src="./images/dislike.png"/>--}}
                {{--                                                <div>( 0 )</div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
            </div>
        </div>
    </div>
</div>
<style>
    .review_star {
        max-width: 20px;
    }
</style>
