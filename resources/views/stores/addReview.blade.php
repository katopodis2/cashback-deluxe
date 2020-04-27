@extends('layouts.app')
@section('content')
    <div class="homeBringFriend">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="mainPaddingMyFeedback">
{{--            <div class="myFeedbackMain">{{__("global.mainPage")}}  >>   All Shops  >>   Adidas  >> Review</div>--}}
            <div class="myFeedBackMainTitle">{{__("global.myFeedbackAbout")}} Adidas(name store)</div>
            <div class="myFeedbackFlex">

                <form method="POST" action="{{route('store.storeReview')}}">
                    @csrf
                    <div class="myFeedbackFlexPadding">
                        <div class="myFeedbackBold">{{__("global.overallAssessment")}}</div>
                        <div class="imgsFlex ">
                            <div class="rate">
                                <input type="radio" id="main_rate5" name="main_rate" value="5"/>
                                <label for="main_rate5" title="text"></label>
                                <input type="radio" id="main_rate4" name="main_rate" value="4"/>
                                <label for="main_rate4" title="text"> </label>
                                <input type="radio" id="main_rate3" name="main_rate" value="3"/>
                                <label for="main_rate3" title="text"></label>
                                <input type="radio" id="main_rate2" name="main_rate" value="2"/>
                                <label for="main_rate2" title="text"></label>
                                <input type="radio" id="main_rate1" name="main_rate" value="1"/>
                                <label for="main_rate1" title="text"></label>
                            </div>
                            <div class="myFeedbackMarginTop">{{__("global.rateStore")}}
                            </div>

                        </div>
                        <div class="myFeedbackBold" id="myFeedbackBold">{{__("global.parameterEstimates")}}</div>
                        <div class="imgsFlex ">
                            <div class="rate">
                                <div class="myFeedbackMarginButtom">{{__("global.deliverySpeed")}}</div>
                                <input type="radio" id="delivery_speed5" name="delivery_speed" value="5"/>
                                <label for="delivery_speed5" title="text"></label>
                                <input type="radio" id="delivery_speed4" name="delivery_speed" value="4"/>
                                <label for="delivery_speed4" title="text"> </label>
                                <input type="radio" id="delivery_speed3" name="delivery_speed" value="3"/>
                                <label for="delivery_speed3" title="text"></label>
                                <input type="radio" id="delivery_speed2" name="delivery_speed" value="2"/>
                                <label for="delivery_speed2" title="text"></label>
                                <input type="radio" id="delivery_speed1" name="delivery_speed" value="1"/>
                                <label for="delivery_speed1" title="text"></label>
                            </div>

                        </div>
                        <div class="imgsFlex ">
                            <div class="rate">
                                <div class="myFeedbackMarginButtom">{{__("global.suportQuality")}}</div>
                                <input type="radio" id="quality5" name="quality" value="5"/>
                                <label for="quality5" title="text"></label>
                                <input type="radio" id="quality4" name="quality" value="4"/>
                                <label for="quality4" title="text"> </label>
                                <input type="radio" id="quality3" name="quality" value="3"/>
                                <label for="quality3" title="text"></label>
                                <input type="radio" id="quality2" name="quality" value="2"/>
                                <label for="quality2" title="text"></label>
                                <input type="radio" id="quality1" name="quality" value="1"/>
                                <label for="quality1" title="text"></label>
                            </div>
                        </div>
                        <div class="imgsFlex ">
                            <div class="myFeedbackMarginButtom">{{__("global.productDescCompliance")}}</div>
                            <div class="rate">
                                <input type="radio" id="compliance5" name="compliance" value="5"/>
                                <label for="compliance5" title="text"></label>
                                <input type="radio" id="compliance4" name="compliance" value="4"/>
                                <label for="compliance4" title="text"> </label>
                                <input type="radio" id="compliance3" name="compliance" value="3"/>
                                <label for="compliance3" title="text"></label>
                                <input type="radio" id="compliance2" name="compliance" value="2"/>
                                <label for="compliance2" title="text"></label>
                                <input type="radio" id="compliance1" name="compliance" value="1"/>
                                <label for="compliance1" title="text"></label>
                            </div>
                        </div>

                        <div class="wouldYouFlex">
                            <div class="myFeedbackBold" id= "myFeedbackBold">{{__("global.wouldBuyAgain")}}</div>
                            <div class="yesOrNoMargin">
                                <div class="radio-group">
                                    <input class = "radioYesOrNo"type="radio" id="option-one" name="selector">
                                    <label class = "radioYesOrNoLabel" for="option-one">{{__("form.yes")}}</label>
                                    <input class = "radioYesOrNo"type="radio" id="option-two" name="selector">
                                    <label class = "radioYesOrNoLabel"for="option-two">{{__("form.no")}}</label>
                                </div>
                            </div>
                        </div>


                        <div class="myFeedbackBold">{{__("global.tellMore")}}</div>
                        <div>
                            <div class="myFeedBackInputs">
                                <div class="myFeedBackInputs-Flex">
                                    <div>
                                        <div class="inputTitle">{{__("global.advantages")}}</div>
                                        <textarea class="advAndCommInputs" name="advantage_review" placeholder="What did you like about the store?"></textarea>
                                    </div>
                                    <div>
                                        <div class="inputTitle">{{__("global.comment")}}</div>
                                        <textarea class="advAndCommInputs" name="comment_review" placeholder="Other store experiences"></textarea>
                                    </div>
                                </div>
                                <div class="myFeedBackInputs-Flex" >
                                    <div>
                                        <div class="inputTitle" id="disatvMarginTop">{{__("global.disadvantages")}}</div>
                                        <textarea class="disadvinput" name="disadvantage_review" placeholder="What did not meet your expectations?"></textarea>
                                    </div>
                                    <div>
                                        <div class="inputTitle" id="disatvMarginTop">{{__("global.orderNumber")}}</div>
                                        <input class="orderNumber" type="text" placeholder="Specify the order number, if any." name="review_order_number">
                                        <div class="myFeedBackButtonsFlexEnd">
                                            <button type="submit" class="myFeedBacksendFeedback">{{__('form.sendFeedback')}}</button>
                                            <a href="{{route("store.review")}}"><button class="myFeedBackCancel">{{__("form.cancel")}}</button></a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </diV>
                </form>
                @include("stores/right")
            </div>
        </div>

    </div>

@endsection
