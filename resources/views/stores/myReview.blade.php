@extends('layouts.app')

@section('content')
    <div class="container">
        <div><h3>{{__('global.my_review')}}</h3></div>
        <div><p>{{__('global.text_my_review_page1')}}
                <a href="{{route('faq')}}">{{__('global.contact_as')}}</a>{{__('global.text_my_review_page2')}}</p>
        </div>
        <div class="row p-2" style="border: 1px solid black;">
            <div class="shop_review m-3" id="review-10200">
                <h2 class="review_shop_name"><a href="{{route('store.shop',$slug)}}" target="_blank">{{$slug}}</a></h2>
                <p class="review_shop_date">{{__('global.feedbackPub')}}
                    <span>{{$data['comments']['created_at']}}</span>
                </p>
                <div class="offer_review_rate">
                    <div class="shop_review_star_rate pb-3">
                        @for($i = 0; $i < 5; $i++)
                            @if($i < $data['rating']['overall'])
                                <img src="{{asset('images/Star_full.svg')}}"  class="review_star">
                            @else
                                <img src="{{asset('images/Star_empty.svg')}}"  class="review_star">
                            @endif
                        @endfor
                    </div>
                </div>
                @foreach($data['comments'] as $key => $item)
                    @if($key == "advantages" || $key == "disadvantages" || $key == "comment" || $key == "order_number")
                        <div class="shop_rev">
                            <p>{{$key}}:</p>
                            <p style="font-weight: normal !important;">{{$item}}</p>
                        </div>
                    @endif
                @endforeach
                {{--        <div class="shop_disadvantage">--}}
                {{--            <p>Disadvantages:</p>--}}
                {{--            <p>fsdf</p>--}}
                {{--        </div>--}}
                {{--        <div class="shop_comment">--}}
                {{--            <p>Comment:</p>--}}
                {{--            <p>dsfs</p>--}}
                {{--        </div>--}}
                {{--        <div class="order_number_review">--}}
                {{--            <p>Order number:</p>--}}
                {{--            <p>sdf</p>--}}
                {{--        </div>--}}

                        <a href="{{route('store.editReview',$slug)}}" class="change_shop_review_btn">Edit</a>
            </div>
        </div>
    </div>
@endsection

<style>
    .review_star{
        max-width: 20px;
    }
</style>
