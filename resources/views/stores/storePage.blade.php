@extends('layouts.app')
@section('content')
    <div class="homeBringFriend">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="mainPaddingMyFeedback">
            <div>
                <a href="{{route("home")}}">{{__("global.mainPage")}}</a> >> {{__("global.allShops")}} >>
                <a href="{{route("store.store")}}">Adidas (store name)</a>
            </div>
            <div class="adidasTitle">{{__("global.byOnAndGetCash",["storeName"=>"adidas"])}}</div>
            <div class="adidasFlex">
                @include("stores/left")
                @if(\Illuminate\Support\Facades\Route::currentRouteName() == "store.review")
                    @include("stores/review")
                @else
                    @include("stores/cashback")
                @endif
                @include('stores/right')
            </div>
        </div>
    </div>
@endsection
