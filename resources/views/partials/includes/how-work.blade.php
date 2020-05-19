<div class="buttons_section">
    <div class="container">
        <button id="view" data-toggle="modal" data-target="#exampleModalCenter"><i
                class="far fa-play-circle"></i> {{__("global.watch_video")}}</button>

        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" id="modal">

                    <div class="modal-body">
                        <video width="100%" controls>
                            <source src={{asset("/videos/cashbackVideo.mp4")}} type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>
        </div>
        <a href="{{route('register')}}" style="color: white; text-decoration: none;">
            <button id="register">{{__("global.register_now")}}</button>
        </a>
        <br clear="all">
    </div>
</div>

<div class="working_principle_items inner-wrap">
    <div class="bolded_text">{{__("global.how_work")}}</div>
    <div class="list_of_working">
        @foreach($items as $item)
            <div>
                <div class="list-logo">
                    <img src={{url('storage/images/howWork/'.$item->img)}} alt="">
                </div>
                <p>{{$item->title}}</p>
                <p>{{$item->text}}</p>
                <div class="arrow"></div>
            </div>
        @endforeach
        {{--        <div>--}}
        {{--            <div class="list-logo">--}}
        {{--                <img src={{asset('images/cart.png')}} alt="">--}}
        {{--            </div>--}}
        {{--            <p>Make your purchase</p>--}}
        {{--            <p>Click on your favorite online store. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
        {{--                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud--}}
        {{--                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in--}}
        {{--                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint--}}
        {{--                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
        {{--            <div class="arrow"></div>--}}
        {{--        </div>--}}
        {{--        <div>--}}
        {{--            <div class="list-logo">--}}
        {{--                <img src={{asset('images/credit_card.png')}} alt="">--}}
        {{--            </div>--}}
        {{--            <p>Pay by credit card</p>--}}
        {{--            <p>Click on your favorite online store. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
        {{--                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud--}}
        {{--                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in--}}
        {{--                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint--}}
        {{--                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
        {{--            <div class="arrow"></div>--}}
        {{--        </div>--}}
        {{--        <div>--}}
        {{--            <div class="list-logo">--}}
        {{--                <img src={{asset('images/money.png')}} alt="">--}}
        {{--            </div>--}}
        {{--            <p>Get cashback!</p>--}}
        {{--            <p>Click on your favorite online store. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
        {{--                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud--}}
        {{--                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in--}}
        {{--                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint--}}
        {{--                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
        {{--        </div>--}}
        <br clear="all">
    </div>
</div>
