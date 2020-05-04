<?php
    $overall = array_shift($thisStoreRating);
?>
<div  class="adidasFlexMarginRight" >
    <div class="adidasDiv">
        <div >
            <img src="./images//adidas.png"/>
            <div class="adidasText">{{__("global.percentCashBack",["startPercent"=>5.33, "endPercent"=>8])}}</div>
            <button class="adidasDivButton">{{__("global.byWithCashBack")}}</button>
        </div>
    </div>
    <div class="totalRatingAdidasDownFlex">
        <div class="totalRatingFlex">
            <div class="totalRatingAdidasDown">{{$overall}}</div>
            <div>
                @include("stores.star", [$overall])
{{--                <div class="star-container" style="position: relative; display: inline-block; vertical-align: middle; padding-left: 1px; padding-right: 1px;"><svg viewBox="0 0 15 14" class="widget-svg" style="width: 18px; height: 18px; transition: transform 0.2s ease-in-out 0s;"><path class="star" d="m14.5300363 5.15458298c-.047781-.14367154-.1732063-.24629407-.3255084-.26975065l-4.53919978-.6333276-2.04263991-4.03159931c-.06868526-.13487533-.20904209-.21990542-.36134419-.21990542s-.29265894.08503009-.3613442.22283749l-2.01576306 4.0433276-4.53919979.66264832c-.1523021.02345658-.27772735.12607911-.3255084.26975065s-.00597263.30200344.10452105.40462597l3.29390616 3.13438521-.76151049 4.43915736c-.02687685.1495357.03583578.2990714.16126104.3870335.06868526.0498452.1523021.0762339.23591894.0762339.06569894 0 .12841157-.0146604.18813788-.0469132l4.05243034-2.1081599 4.06437561 2.0847034c.0597263.0293207.1224389.043981.1851516.043981.2209873 0 .4031526-.1788564.4031526-.3958297 0-.0322528-.0029863-.0615735-.0119453-.0908942l-.785401-4.41276874 3.2730019-3.15197765c.1164664-.1055546.1552885-.2638865.1075074-.40755803z" style="fill: rgb(252, 221, 0); transition: fill 0.2s ease-in-out 0s;"></path></svg></div>--}}
{{--                <div class="star-container" style="position: relative; display: inline-block; vertical-align: middle; padding-left: 1px; padding-right: 1px;"><svg viewBox="0 0 15 14" class="widget-svg" style="width: 18px; height: 18px; transition: transform 0.2s ease-in-out 0s;"><path class="star" d="m14.5300363 5.15458298c-.047781-.14367154-.1732063-.24629407-.3255084-.26975065l-4.53919978-.6333276-2.04263991-4.03159931c-.06868526-.13487533-.20904209-.21990542-.36134419-.21990542s-.29265894.08503009-.3613442.22283749l-2.01576306 4.0433276-4.53919979.66264832c-.1523021.02345658-.27772735.12607911-.3255084.26975065s-.00597263.30200344.10452105.40462597l3.29390616 3.13438521-.76151049 4.43915736c-.02687685.1495357.03583578.2990714.16126104.3870335.06868526.0498452.1523021.0762339.23591894.0762339.06569894 0 .12841157-.0146604.18813788-.0469132l4.05243034-2.1081599 4.06437561 2.0847034c.0597263.0293207.1224389.043981.1851516.043981.2209873 0 .4031526-.1788564.4031526-.3958297 0-.0322528-.0029863-.0615735-.0119453-.0908942l-.785401-4.41276874 3.2730019-3.15197765c.1164664-.1055546.1552885-.2638865.1075074-.40755803z" style="fill: rgb(252, 221, 0); transition: fill 0.2s ease-in-out 0s;"></path></svg></div>--}}
{{--                <div class="star-container" style="position: relative; display: inline-block; vertical-align: middle; padding-left: 1px; padding-right: 1px;"><svg viewBox="0 0 15 14" class="widget-svg" style="width: 18px; height: 18px; transition: transform 0.2s ease-in-out 0s;"><path class="star" d="m14.5300363 5.15458298c-.047781-.14367154-.1732063-.24629407-.3255084-.26975065l-4.53919978-.6333276-2.04263991-4.03159931c-.06868526-.13487533-.20904209-.21990542-.36134419-.21990542s-.29265894.08503009-.3613442.22283749l-2.01576306 4.0433276-4.53919979.66264832c-.1523021.02345658-.27772735.12607911-.3255084.26975065s-.00597263.30200344.10452105.40462597l3.29390616 3.13438521-.76151049 4.43915736c-.02687685.1495357.03583578.2990714.16126104.3870335.06868526.0498452.1523021.0762339.23591894.0762339.06569894 0 .12841157-.0146604.18813788-.0469132l4.05243034-2.1081599 4.06437561 2.0847034c.0597263.0293207.1224389.043981.1851516.043981.2209873 0 .4031526-.1788564.4031526-.3958297 0-.0322528-.0029863-.0615735-.0119453-.0908942l-.785401-4.41276874 3.2730019-3.15197765c.1164664-.1055546.1552885-.2638865.1075074-.40755803z" style="fill: rgb(252, 221, 0); transition: fill 0.2s ease-in-out 0s;"></path></svg></div>--}}
{{--                <div class="star-container" style="position: relative; display: inline-block; vertical-align: middle; padding-left: 1px; padding-right: 1px;"><svg viewBox="0 0 15 14" class="widget-svg" style="width: 18px; height: 18px; transition: transform 0.2s ease-in-out 0s;"><path class="star" d="m14.5300363 5.15458298c-.047781-.14367154-.1732063-.24629407-.3255084-.26975065l-4.53919978-.6333276-2.04263991-4.03159931c-.06868526-.13487533-.20904209-.21990542-.36134419-.21990542s-.29265894.08503009-.3613442.22283749l-2.01576306 4.0433276-4.53919979.66264832c-.1523021.02345658-.27772735.12607911-.3255084.26975065s-.00597263.30200344.10452105.40462597l3.29390616 3.13438521-.76151049 4.43915736c-.02687685.1495357.03583578.2990714.16126104.3870335.06868526.0498452.1523021.0762339.23591894.0762339.06569894 0 .12841157-.0146604.18813788-.0469132l4.05243034-2.1081599 4.06437561 2.0847034c.0597263.0293207.1224389.043981.1851516.043981.2209873 0 .4031526-.1788564.4031526-.3958297 0-.0322528-.0029863-.0615735-.0119453-.0908942l-.785401-4.41276874 3.2730019-3.15197765c.1164664-.1055546.1552885-.2638865.1075074-.40755803z" style="fill: rgb(252, 221, 0); transition: fill 0.2s ease-in-out 0s;"></path></svg></div>--}}
{{--                <div class="star-container" style="position: relative; display: inline-block; vertical-align: middle; padding-left: 1px;"><svg viewBox="0 0 15 14" class="widget-svg multi-widget-selected" style="width: 18px; height: 18px; transition: transform 0.2s ease-in-out 0s;"><defs>--}}
{{--                            <linearGradient id="half_grad">--}}
{{--                                <stop offset="0%" stop-color="rgb(252,221,0)"/>--}}
{{--                                <stop offset="100%" stop-color="grey" stop-opacity="1" />--}}
{{--                            </linearGradient>--}}
{{--                        </defs><path class="star" d="m14.5300363 5.15458298c-.047781-.14367154-.1732063-.24629407-.3255084-.26975065l-4.53919978-.6333276-2.04263991-4.03159931c-.06868526-.13487533-.20904209-.21990542-.36134419-.21990542s-.29265894.08503009-.3613442.22283749l-2.01576306 4.0433276-4.53919979.66264832c-.1523021.02345658-.27772735.12607911-.3255084.26975065s-.00597263.30200344.10452105.40462597l3.29390616 3.13438521-.76151049 4.43915736c-.02687685.1495357.03583578.2990714.16126104.3870335.06868526.0498452.1523021.0762339.23591894.0762339.06569894 0 .12841157-.0146604.18813788-.0469132l4.05243034-2.1081599 4.06437561 2.0847034c.0597263.0293207.1224389.043981.1851516.043981.2209873 0 .4031526-.1788564.4031526-.3958297 0-.0322528-.0029863-.0615735-.0119453-.0908942l-.785401-4.41276874 3.2730019-3.15197765c.1164664-.1055546.1552885-.2638865.1075074-.40755803z" style="fill: /*rgb(252,221,120)*/ url(#half_grad); transition: fill 0.2s ease-in-out 0s;"></path></svg></div>--}}
{{--                <img src="./images/starMyFeedbackRating.png"/>--}}
{{--                <img src="./images/starMyFeedbackRating.png"/>--}}
{{--                <img src="./images/starMyFeedbackRating.png"/>--}}
{{--                <img src="./images/starMyFeedbackRating.png"/>--}}
{{--                <img src="./images/starMyFeedbackRating.png"/>--}}
            </div>
        </div>
        <div class="totalRatingAndLeaveReviewFlex">
            <div class="totalRatingMiniTitle">{{__("global.totalRating")}}</div>
            @if($is_review)
                <div class="leaveReviewMiniTitle"><a href="{{route("store.editReview", $slug)}}">{{__("global.editLeaveReview")}}</a></div>
            @else
                <div class="leaveReviewMiniTitle"><a href="{{route("store.addReview", $slug)}}">{{__("global.leaveReview")}}</a></div>
            @endif
        </div>
    </div>
    <div class="reviewsBorder"id="reviewsBorder">
        <div class="adidasDivUserNameFlex">
            <div class="adidasDivUserName" >User Name</div>
            <div>
                <img src="./images/starAdidas.png"/>
                <img src="./images/starAdidas.png"/>
                <img src="./images/starAdidas.png"/>
                <img src="./images/starAdidas.png"/>
                <img src="./images/starAdidas.png"/>
            </div>
        </div>
        <div >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
        <div class="learnMore">{{__("global.learnMore")}}</div>
    </div>
    <div class="shareMyFeedback">
        <div>Share:</div>
        <img src="./images/lnMyFeedback.png"/>
        <img src="./images/twitterMyFeedback.png">
        <img src="./images//facebookMyFeedback.png"/>
    </div>
    <div class="reviewsBorder"id="reviewsBorder">
        <div class="adidasDivUserName" >{{__("global.aboutStore")}}</div>
        <div >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus reprehenderit rem, officia debitis quis placeat deserunt tempora ipsum ea commodi repellat odio. Eaque rerum unde quo, dolore laudantium maxime quasi! </div>
        <div class="learnMore">Go to the store</div>
    </div>

</div>

{{----}}


