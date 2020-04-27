<form class="rate">
    <div class="myFeedbackFlexPadding">
        <div class="myFeedbackBold">Overall assessment:</div>
        <div class="imgsFlex">
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
            <div class="myFeedbackMarginTop">Please rate the store from 1 to 5 stars, where 1 star is a bad store and 5
                stars is a great store.
            </div>

        </div>
        <div class="myFeedbackBold" id="myFeedbackBold">Parameter estimates:</div>
        <div class="imgsFlex">
            <div class="myFeedbackMarginButtom">Delivery speed</div>
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
        <div class="imgsFlex">
            <div class="myFeedbackMarginButtom">Support quality</div>
            <input type="radio" id="quality5" name="quality" value="5"/>
            <label for="quality5" title="text"></label>
            <input type="radio" id="quality4" name="quality" value="4"/>
            <label for=qualityr4" title="text"> </label>
            <input type="radio" id="quality3" name="quality" value="3"/>
            <label for="quality3" title="text"></label>
            <input type="radio" id="quality2" name="quality" value="2"/>
            <label for="quality2" title="text"></label>
            <input type="radio" id="quality1" name="quality" value="1"/>
            <label for="quality1" title="text"></label>
        </div>
        <div class="imgsFlex">
            <div class="myFeedbackMarginButtom">Product description compliance</div>
            <input type="radio" class="compliance5" name="compliance" value="5"/>
            <label for="compliance5" title="text"></label>
            <input type="radio" class="compliance4" name="compliance" value="4"/>
            <label for="compliance4" title="text"> </label>
            <input type="radio" class="compliance3" name="compliance" value="3"/>
            <label for="compliance3" title="text"></label>
            <input type="radio" class="compliance2" name="compliance" value="2"/>
            <label for="compliance2" title="text"></label>
            <input type="radio" class="compliance1" name="compliance" value="1"/>
            <label for="compliance1" title="text"></label>
        </div>

        <div class="wouldYouFlex">
            <div class="myFeedbackBold" id="myFeedbackBold">Would you buy here again?</div>
            <div class="yesOrNoMargin">
                <input class="myFeedbackYesOrNo" type="radio" id="yes_buy" name="buy_again" value="1">
                <label for="yes_buy">Yes</label>
                <input class="myFeedbackYesOrNo" type="radio" id="no_buy" name="buy_again" value="0">
                <label for="no_buy">No</label>
            </div>
        </div>

        <div class="myFeedbackBold">Tell us more</div>
        <div>
            <div class="myFeedBackInputs">
                <div class="myFeedBackInputs-Flex">
                    <div>
                        <div class="inputTitle">Advantages:</div>
                        <textarea class="advAndCommInputs" name="advantage_review" placeholder="What did you like about the store?"></textarea>
                    </div>
                    <div>
                        <div class="inputTitle">Comment:</div>
                        <textarea class="advAndCommInputs" name="comment_review" placeholder="Other store experiences"></textarea>
                    </div>
                </div>
                <div class="myFeedBackInputs-Flex">
                    <div>
                        <div class="inputTitle" id="disatvMarginTop">Disadvantages:</div>
                        <textarea class="disadvinput" name="disadvantage_review" placeholder="What did not meet your expectations?"></textarea>
                    </div>
                    <div>
                        <div class="inputTitle" id="disatvMarginTop">Order number:</div>
                        <input class="orderNumber" type="text" placeholder="Specify the order number, if any." name="review_order_number">
                        <div class="myFeedBackButtonsFlexEnd">
                            <button class="myFeedBacksendFeedback">Send Feedback</button>
                            <button class="myFeedBackCancel">Cancel</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </diV>
</form>
