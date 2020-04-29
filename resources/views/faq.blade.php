@extends('layouts.app')
@section('content')
    <div class="faqFlex">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="faqPaddingPage">
            <p class="FaqMainTitle">{{__("global.faq")}}</p>
            <div class="FaqMainDiv">
                <hr class="faqHr">
                @foreach($faqImportant as $it)
                <div class="FaqTitle">
                    {{$it->question}}{{--When will my cash back be confirmed?--}}
                </div>
                <div class="FaqPS">
                    {!! $it->answer !!}
{{--                    <p>You can see a general time of cash back confirmation on the page of the shop you're--}}
{{--                        interested in (as it may differ).</p>--}}
{{--                    <p>Calculate the approximate date of your cash back confirmation using this formula: </p>--}}
{{--                    <p>Confirm goods received date + the usual period of cash back confirmation listed on the page--}}
{{--                        of the shop you're interested. </p>--}}
{{--                    <p class="FaqInnerMainDiv">Few other factors can influence the cash back confirmation, such--}}
{{--                        as: </p>--}}
{{--                    <p>Delivery deadline. Your cash back can ONLY be confirmed once you have confirmed goods--}}
{{--                        received. </p>--}}
{{--                    <p>Opened disputes or partial refunds. If you asked to recount the sum of your order, there's a--}}
{{--                        big chance you'll have to wait longer. </p>--}}
{{--                    <p>The warranty period for the goods that you can't exchange. Cash back confirmation--}}
{{--                        extends. </p>--}}
{{--                    <p>Big sales can attract many customers; it takes more time to process the orders.</p>--}}
{{--                    <p class="FaqInnerMainDiv">Confirm goods received in AliExpress and wait less time:</p>--}}
{{--                    <p>Log in AliExpress account.</p>--}}
{{--                    <p>Enter My orders.</p>--}}
{{--                    <p>Click on "Confirm goods received".</p>--}}
                </div>
                 @endforeach
            </div>
            @foreach($faqButNotImportant as $item)
                <div class="FaqOthersDiv">
                    <p class="FaqTitle">{!! $item->question !!}</p>
                </div>
                <div class="panel"><p>{!! $item->answer !!}</p></div>
            @endforeach
        </div>
    </div>

    <div class="faqImgLogo">
        <form method="POST" action="{{route("sendMail")}}" class="changePasswordDiv" id="topicForm">
            @csrf
            <div class="FaqTitle" id="FaqTitle">{{__("form.askNewQuestion")}}</div>
            @if(!auth()->user())
                <label for="yourEmail">{{__("from.yourEmail")}}</label>
                <input type="text" id="yourEmail" name="yourEmail" class="FaqSelects">
            @endif
            <label for="selectTopic ">{{__("form.selectTopic")}} </label>
            <select class="FaqSelects" id="topic" name="topicList" form="topicForm">
            </select>

            <label for="enterMessages">{{__("form.enterMessage")}}</label>
            <textarea rows="4" cols="50" name="enterMessages" form="topicForm"
                      class="mySettingInputStyle"> </textarea>

            <div class="changePasswordDownFlex">
                <button type="submit" class="cancelDiv">{{__("form.submit")}}</button>
                {{--                    <button class="cancelDiv" id="cancelDiv">{{__("form.cancel")}}</button>--}}
            </div>
        </form>
    </div>

@endsection

<style>
    .FaqOthersDiv {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active, .FaqOthersDiv:hover {
        background-color: #ccc;
    }

    .FaqOthersDiv:after {
        content: '\002B';
        color: #777;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content: "\2212";
    }

    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
</style>

@push("bottom_js")
    <script>
        var acc = document.getElementsByClassName("FaqOthersDiv");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

@endpush
