@extends('layouts.app')
@section('content')

    <div class="homeBringFriend">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="mainPaddingMyFeedback">
            <div>
                <a href="{{route("home")}}">{{__("global.mainPage")}}</a> >> {{__("global.allShops")}} >>
                <a href="{{route("store.shop", $slug)}}">{{$slug}}</a>
            </div>
            <div class="adidasTitle">{{__("global.byOnAndGetCash",["storeName"=>$slug])}}</div>
            <div class="adidasFlex">
                @include("stores/left",[$slug, $is_review])
                @if(\Illuminate\Support\Facades\Route::currentRouteName() == "store.review")
                    @include("stores/review",[$slug, $is_review])
                @else
                    @include("stores/cashback",[$slug])
                @endif
                @include('stores/right')
            </div>
        </div>
    </div>
@endsection
