@extends('layouts.app')

@section('content')
    <div class="row">
        {{--        <div class="col-lg-12">--}}
        {{--            <h1 class="page-header">{{__('global.faq-create')}}</h1>--}}
        {{--        </div>--}}
        <div class="col-md-10 offset-1">
            @include("stores.partials.formReview", [$slug,$item])
        </div>
    </div>

@endsection
