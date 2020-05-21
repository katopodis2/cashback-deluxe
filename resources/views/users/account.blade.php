@extends('layouts.app')
@section('content')
    <div class="faqFlex">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="faqPadding">
            <div class="mainPadding">
                <div> Here you can adjust the settings for your account and change your password.</div>
                <div class="marginMySettingDiv"> Please contact us if you have any questions.</div>
                <a href="{{route("user.changePass")}}">{{__("form.changePass")}}</a>
                <div class="mySettingDiv">
                    <form method="POST" id="countryForm">
                        @csrf
                        <div class="profileTitle">{{__("form.profile")}}</div>
                        <div class="inputNamesFlex">
                            <label for="emailAddress">{{__("form.emailAdd")}} </label>
                            <div class="errorColor">*</div>
                        </div>
                        <input type="text" id="emailAddress" name="emailAddress" class="mySettingInputStyle">

                        <div class="inputNamesFlex">
                            <label for="nameAcc">{{__("form.name")}} </label>
                            <div class="errorColor">*</div>
                        </div>
                        <input type="text" id="nameAcc" name="name" class="mySettingInputStyle">

                        <div class="inputNamesFlex">
                            <label for="surnameAcc">{{__("form.surname")}}</label>
                            <div class="errorColor">*</div>
                        </div>
                        <input type="text" id="surnameAcc" name="surname" class="mySettingInputStyle">

                        <div class="inputNamesFlex">
                            <label for="region">{{__("form.region")}}</label>
                            <div class="errorColor">*</div>
                        </div>
                        <input type="text" id="region" name="region" class="mySettingInputStyle">

                        <div class="inputNamesFlex">
                            <label for="country">{{__("form.country")}}</label>
                            <div class="errorColor">*</div>
                        </div>
                        <select class="mySettingInputStyle" id="country" name="countryList" form="countryForm">
                        </select>
                        <div class="mysettingDownFlex">
                            <button type="submit" class="saveProfileDiv">{{__("form.save")}}</button>
                        </div>
                    </form>

{{--                    <div class="socialNetwork">{{__("form.socialNetworks")}}</div>--}}
{{--                    <div>--}}
{{--                        <div class="socialNetworkMainLines">--}}
{{--                            <div class="socialNetworkLine">--}}
{{--                                <img class="socialNetworkImg" src="./images/linkedinColor.png"/>--}}
{{--                                <div>Linkedin</div>--}}
{{--                            </div>--}}
{{--                            <label class="switch">--}}
{{--                                <input type="checkbox">--}}
{{--                                <span class="slider round"></span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <hr>--}}

{{--                        <div class="socialNetworkMainLines">--}}
{{--                            <div class="socialNetworkLine">--}}
{{--                                <img class="socialNetworkImg" src="./images/twitterColor.png"/>--}}
{{--                                <div>Twitter</div>--}}
{{--                            </div>--}}
{{--                            <label class="switch">--}}
{{--                                <input type="checkbox">--}}
{{--                                <span class="slider round"></span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <hr>--}}

{{--                        <div class="socialNetworkMainLines">--}}
{{--                            <div class="socialNetworkLine">--}}
{{--                                <img class="socialNetworkImg" src="./images/facebookColor.png"/>--}}
{{--                                <div>Facebook</div>--}}
{{--                            </div>--}}
{{--                            <label class="switch">--}}
{{--                                <input type="checkbox">--}}
{{--                                <span class="slider round"></span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <hr>--}}
{{--                        <div  class="mysettingDownFlex">--}}
{{--                            <button data-toggle="modal" data-target="#myModal{{auth()->user()->id}}" class="delteProfileDiv m-0 float-right btn-product-delete">Delete profile</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <div id="myModal{{auth()->user()->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{__('global.are_you_sure')}}</p>
                </div>
                <div class="modal-footer">
                    <div class="row w-100">
                        <form action="">
                        <div class="text-center">
                            <button type="submit"  class="closeModal btn-default" >{{__("form.close")}}</button>
                            <button type="submit" class="deleteAccountModal btn-danger">{{__("form.delete")}}</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
.deleteAccountModal, .closeModal{
    border-radius: 5px;
    width: 100px;
}

</style>
