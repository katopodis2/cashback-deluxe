@extends('layouts.app')
@section('content')
    <div class="faqFlex">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="faqPadding">
            <div>
                <div class="adidasTitle">{{__("form.changePass")}}</div>
                <div>{{__("global.settingsAccountChangePass")}}</div>
                <div class="marginMySettingDiv">{{__("global.contactQuestions")}}</div>
            </div>
            <div>
                <form method="POST" class="changePasswordDiv">
                    @csrf
                    <div class="changePasswordDivTitle">{{__("form.changePass")}}</div>
                    <div class="inputNamesFlex">
                        <label for="currentPassword">{{__("form.changePass")}}</label>
                        <label class="errorColor">*</label>
                    </div>
                    <input type="text" id="currentPassword" name="currentPassword" class="mySettingInputStyle">
                    <div class="inputNamesFlex">
                        <label for="newPassword">{{__("form.newPass")}}</label>
                        <label class="errorColor">*</label>
                    </div>
                    <input type="text" id="newPassword" name="newPassword" class="mySettingInputStyle">
                    <div class="inputNamesFlex">
                        <label for="reEnterPassword">{{__("form.reEnterPass")}}</label>
                        <label class="errorColor">*</label>
                    </div>
                    <input type="text" id="reEnterPassword" name="reEnterPassword" class="mySettingInputStyle">
                    <div class="changePasswordDownFlex">
                        <button class="cancelDiv" id="cancelDiv">{{__("form.cancel")}}</button>
                        <button type="submit" class="cancelDiv">{{__("form.save")}}</button>

                    </div>
                    <!-- <input type="submit" value="Submit"> -->
                </form>
            </div>
        </div>
    </div>
@endsection
