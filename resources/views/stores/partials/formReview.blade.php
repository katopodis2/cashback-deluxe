<?php
$route = "storeReview";
//dd($item);
if (!empty($item)){
    $route = "updateReview";
}
?>

<div class="homeBringFriend">
    @if(auth()->user())
        @include("partials.left-menu")
    @endif
    <div class="mainPaddingMyFeedback">
        {{--            <div class="myFeedbackMain">{{__("global.mainPage")}}  >>   All Shops  >>   Adidas  >> Review</div>--}}
        <div class="myFeedBackMainTitle">{{__("global.myFeedbackAbout")}} {{$slug}}</div>
        <div class="myFeedbackFlex">

{{--            <form method="POST" action="{{route('store.storeReview', $slug)}}">--}}
            <form method="POST" action="{{route("store.$route",[$slug, $id??""])}}">
                @csrf
                <div class="myFeedbackFlexPadding">
                    <div class="myFeedbackBold">{{__("global.overallAssessment")}}</div>
                    <div class="imgsFlex ">
                        <div class="rate">
                            <input type="radio" id="main_rate5" name="overall" value="5"/>
                            <label for="main_rate5" title="text"></label>
                            <input type="radio" id="main_rate4" name="overall" value="4"/>
                            <label for="main_rate4" title="text"> </label>
                            <input type="radio" id="main_rate3" name="overall" value="3"/>
                            <label for="main_rate3" title="text"></label>
                            <input type="radio" id="main_rate2" name="overall" value="2"/>
                            <label for="main_rate2" title="text"></label>
                            <input type="radio" id="main_rate1" name="overall" value="1"/>
                            <label for="main_rate1" title="text"></label>
                        </div>
                        @if($errors->has('overall'))
                            <div class="error" style="color: red">{{ $errors->first('overall') }}</div>
                        @endif
                        {{--                            <div class="myFeedbackMarginTop">{{__("global.rateStore")}}</div>--}}


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
                            <input type="radio" id="quality5" name="support_quality" value="5"/>
                            <label for="quality5" title="text"></label>
                            <input type="radio" id="quality4" name="support_quality" value="4"/>
                            <label for="quality4" title="text"> </label>
                            <input type="radio" id="quality3" name="support_quality" value="3"/>
                            <label for="quality3" title="text"></label>
                            <input type="radio" id="quality2" name="support_quality" value="2"/>
                            <label for="quality2" title="text"></label>
                            <input type="radio" id="quality1" name="support_quality" value="1"/>
                            <label for="quality1" title="text"></label>
                        </div>
                    </div>
                    <div class="imgsFlex ">
                        <div class="myFeedbackMarginButtom">{{__("global.productDescCompliance")}}</div>
                        <div class="rate">
                            <input type="radio" id="compliance5" name="product_description_compliance" value="5"/>
                            <label for="compliance5" title="text"></label>
                            <input type="radio" id="compliance4" name="product_description_compliance" value="4"/>
                            <label for="compliance4" title="text"> </label>
                            <input type="radio" id="compliance3" name="product_description_compliance" value="3"/>
                            <label for="compliance3" title="text"></label>
                            <input type="radio" id="compliance2" name="product_description_compliance" value="2"/>
                            <label for="compliance2" title="text"></label>
                            <input type="radio" id="compliance1" name="product_description_compliance" value="1"/>
                            <label for="compliance1" title="text"></label>
                        </div>
                    </div>

                    <div class="wouldYouFlex">
                        <div class="myFeedbackBold" id="myFeedbackBold">{{__("global.wouldBuyAgain")}}</div>
                        <div class="yesOrNoMargin">
                            <div class="radio-group">
                                <input class="radioYesOrNo" type="radio" id="option-one" {{$item['is_buy_again']?"checked":""}} name="is_buy_again" value="{{ConstBoolean::YES}}">
                                <label class="radioYesOrNoLabel" for="option-one">{{__("form.yes")}}</label>
                                <input class="radioYesOrNo" type="radio" id="option-two" {{$item['is_buy_again']?"":"checked"}} name="is_buy_again" value="{{ConstBoolean::NO}}">
                                <label class="radioYesOrNoLabel" for="option-two">{{__("form.no")}}</label>
                            </div>
                        </div>
                    </div>


                    <div class="myFeedbackBold">{{__("global.tellMore")}}</div>
                    <div>
                        <div class="myFeedBackInputs">
                            <div class="myFeedBackInputs-Flex">
                                <div>
                                    <div class="inputTitle">{{__("global.advantages")}}</div>
                                    <textarea class="advAndCommInputs" name="comm[0][advantages]"
                                              placeholder="What did you like about the store?">{{$item['advantages']??""}}</textarea>
                                </div>
                                <div>
                                    <div class="inputTitle">{{__("global.comment")}}</div>
                                    <textarea class="advAndCommInputs" name="comm[0][comment]"
                                              placeholder="Other store experiences">{{$item['comment']??""}}</textarea>
                                </div>
                            </div>
                            <div class="myFeedBackInputs-Flex">
                                <div>
                                    <div class="inputTitle" id="disatvMarginTop">{{__("global.disadvantages")}}</div>
                                    <textarea class="disadvinput" name="comm[0][disadvantages]"
                                              placeholder="What did not meet your expectations?">{{$item['disadvantages']??""}}</textarea>
                                </div>
                                <div>
                                    <div class="inputTitle" id="disatvMarginTop">{{__("global.orderNumber")}}</div>
                                    <input class="orderNumber" value="{{$item['order_number']??""}}" type="text"
                                           placeholder="Specify the order number, if any." name="comm[0][order_number]">
                                    <div class="myFeedBackButtonsFlexEnd">
                                        <button type="submit"
                                                class="myFeedBacksendFeedback">{{__('form.sendFeedback')}}</button>
                                        <a href="{{route("store.review", $slug)}}">
                                            <button class="myFeedBackCancel">{{__("form.cancel")}}</button>
                                        </a>
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

@push('bottom_js')
    <script>

            myCheckedFunc('overall',<?php echo $item['overall'] ?>);
            myCheckedFunc('delivery_speed',<?php echo $item['delivery_speed'] ?>);
            myCheckedFunc('support_quality',<?php echo $item['support_quality'] ?>);
            myCheckedFunc('product_description_compliance',<?php echo $item['product_description_compliance'] ?>);

        function myCheckedFunc(attName, checkedNumber){
            console.log(checkedNumber);
            let radioInputs = document.querySelectorAll("[name="+attName+"]");

            let i;
            for (i = 0; i < radioInputs.length; i++) {

                if(radioInputs[i].value == checkedNumber){
                    radioInputs[i].checked = true
                }
            }
        }

    </script>
@endpush
