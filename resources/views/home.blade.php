@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">Dashboard</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    @if (session('status'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ session('status') }}--}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    You are logged in!--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div class="homeRightWidth" id="homeRightWidth">
        <div class="popular_items inner-wrap">
            <div class="bolded_text">Popular stores</div>
            <div class="list_of_popular">
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/banggood.png')}} alt="">
                    </div>
                    <p>You will get from 5.33% to 8%</p>
                </div>
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/ailexpresslogonew.png')}} alt="">
                    </div>
                    <p>You will get from 5.33% to 8%</p>
                </div>
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/alibaba.png')}} alt="">
                    </div>
                    <p>You will get from 5.33% to 8%</p>
                </div>
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/asos.png')}} alt="">
                    </div>
                    <p>You will get from 5.33% to 8%</p>
                </div>
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/booking.png')}} alt="">
                </div>
                    <p>You will get from 5.33% to 8%</p>
                </div>
                <br clear="all">
            </div>
        </div>
        <div class="buttons_section">
            <div class="container">
                <button id="view"><i class="far fa-play-circle"></i> WATCH THE VIDEO</button>
                <button id="register">REGISTER NOW</button>
                <br clear="all">
            </div>
        </div>
        <div class="working_principle_items inner-wrap">
            <div class="bolded_text">How does it work?</div>
            <div class="list_of_working">
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/search.png')}} alt="">
                    </div>
                    <p>Search online store</p>
                    <p>Click on your favorite online store. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="arrow"></div>
                </div>
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/cart.png')}} alt="">
                    </div>
                    <p>Make your purchase</p>
                    <p>Click on your favorite online store. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="arrow"></div>
                </div>
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/credit_card.png')}} alt="">
                    </div>
                    <p>Pay by credit card</p>
                    <p>Click on your favorite online store. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="arrow"></div>
                </div>
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/money.png')}} alt="">
                    </div>
                    <p>Get cashback!</p>
                    <p>Click on your favorite online store. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <br clear="all">
            </div>
        </div>
        <div class="store_items inner-wrap">
            <div class="bolded_text">Store Categories</div>
            <div class="list_of_categories">
                <div>
                    <p><strong>Fashion and style</strong></p>
                    <p>Stores: 258</p>
                    <div class="list-logo">
                        <img src={{asset('images/row-of-oxford-shirts.png')}} alt="">
                    </div>
                </div>
                <div>
                    <p><strong>Electronics</strong></p>
                    <p>Stores: 258</p>
                    <div class="list-logo">
                        <img src={{asset('images/Electronics.png')}} alt="">
                    </div>
                </div>
                <div>
                    <p><strong>Travel and tourism</strong></p>
                    <p>Stores: 258</p>
                    <div class="list-logo">
                        <img src={{asset('images/Travel-Tourism2.png')}} alt="">
                    </div>
                </div>
                <div>
                    <p><strong>Beauty and health</strong></p>
                    <p>Stores: 258</p>
                    <div class="list-logo">
                        <img src={{asset('images/make_up.png')}} alt="">
                    </div>
                </div>
                <div>
                    <p><strong>For home</strong></p>
                    <p>Stores: 258</p>
                    <div class="list-logo">
                        <img src={{asset('images/home_image2.png')}} alt="">
                    </div>
                </div>
                <div>
                    <p><strong>For kids</strong></p>
                    <p>Stores: 258</p>
                    <div class="list-logo">
                        <img src={{asset('images/toys.png')}} alt="">
                    </div>
                </div>
                <br clear="all">
            </div>
        </div>
        <div class="top_ten_deals inner-wrap">
            <div id="top_ten_header">
                <table>
                    <tr>
                        <td valign="middle">Top 10 deals</td>
                        <td valign="middle">See all deals</td>
                    </tr>
                </table>
            </div>
            <div class="list_of_top_ten">
                @for($i = 0; $i<10; $i++)
                    <div>
                        <div class="list-logo">
                            <img src={{asset('images/booking.png')}} alt="">
                        </div>
                        <div class='content'>
                            <p>&euro;41 cashback </p>
                            <p>Black Friday Dials: Geen aansluiten t.w.v.</p>
                            <p>&euro;20 en tot 2.000 MB graits</p>
                        </div>
                        <button>VIEW ACTION</button>
                    </div>
                @endfor
{{--                <div>--}}
{{--                    <div class="list-logo">--}}
{{--                        <img src={{asset('images/booking.png')}} alt="">--}}
{{--                    </div>--}}
{{--                    <div class='content'>--}}
{{--                        <p>&euro;41 cashback </p>--}}
{{--                        <p>Black Friday Dials: Geen aansluiten t.w.v.</p>--}}
{{--                        <p>&euro;20 en tot 2.000 MB graits</p>--}}
{{--                    </div>--}}
{{--                    <button>VIEW ACTION</button>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="list-logo">--}}
{{--                        <img src={{asset('images/booking.png')}} alt="">--}}
{{--                    </div>--}}
{{--                    <div class='content'>--}}
{{--                        <p>&euro;41 cashback </p>--}}
{{--                        <p>Black Friday Dials: Geen aansluiten t.w.v.</p>--}}
{{--                        <p>&euro;20 en tot 2.000 MB graits</p>--}}
{{--                    </div>--}}
{{--                    <button>VIEW ACTION</button>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="list-logo">--}}
{{--                        <img src={{asset('images/booking.png')}} alt="">--}}
{{--                    </div>--}}
{{--                    <div class='content'>--}}
{{--                        <p>&euro;41 cashback </p>--}}
{{--                        <p>Black Friday Dials: Geen aansluiten t.w.v.</p>--}}
{{--                        <p>&euro;20 en tot 2.000 MB graits</p>--}}
{{--                    </div>--}}
{{--                    <button>VIEW ACTION</button>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="list-logo">--}}
{{--                        <img src={{asset('images/booking.png')}} alt="">--}}
{{--                    </div>--}}
{{--                    <div class='content'>--}}
{{--                        <p>&euro;41 cashback </p>--}}
{{--                        <p>Black Friday Dials: Geen aansluiten t.w.v.</p>--}}
{{--                        <p>&euro;20 en tot 2.000 MB graits</p>--}}
{{--                    </div>--}}
{{--                    <button>VIEW ACTION</button>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="list-logo">--}}
{{--                        <img src={{asset('images/booking.png')}} alt="">--}}
{{--                    </div>--}}
{{--                    <div class='content'>--}}
{{--                        <p>&euro;41 cashback </p>--}}
{{--                        <p>Black Friday Dials: Geen aansluiten t.w.v.</p>--}}
{{--                        <p>&euro;20 en tot 2.000 MB graits</p>--}}
{{--                    </div>--}}
{{--                    <button>VIEW ACTION</button>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="list-logo">--}}
{{--                        <img src={{asset('images/booking.png')}} alt="">--}}
{{--                    </div>--}}
{{--                    <div class='content'>--}}
{{--                        <p>&euro;41 cashback </p>--}}
{{--                        <p>Black Friday Dials: Geen aansluiten t.w.v.</p>--}}
{{--                        <p>&euro;20 en tot 2.000 MB graits</p>--}}
{{--                    </div>--}}
{{--                    <button>VIEW ACTION</button>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="list-logo">--}}
{{--                        <img src={{asset('images/booking.png')}} alt="">--}}
{{--                    </div>--}}
{{--                    <div class='content'>--}}
{{--                        <p>&euro;41 cashback </p>--}}
{{--                        <p>Black Friday Dials: Geen aansluiten t.w.v.</p>--}}
{{--                        <p>&euro;20 en tot 2.000 MB graits</p>--}}
{{--                    </div>--}}
{{--                    <button>VIEW ACTION</button>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="list-logo">--}}
{{--                        <img src={{asset('images/booking.png')}} alt="">--}}
{{--                    </div>--}}
{{--                    <div class='content'>--}}
{{--                        <p>&euro;41 cashback </p>--}}
{{--                        <p>Black Friday Dials: Geen aansluiten t.w.v.</p>--}}
{{--                        <p>&euro;20 en tot 2.000 MB graits</p>--}}
{{--                    </div>--}}
{{--                    <button>VIEW ACTION</button>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="list-logo">--}}
{{--                        <img src={{asset('images/booking.png')}} alt="">--}}
{{--                    </div>--}}
{{--                    <div class='content'>--}}
{{--                        <p>&euro;41 cashback </p>--}}
{{--                        <p>Black Friday Dials: Geen aansluiten t.w.v.</p>--}}
{{--                        <p>&euro;20 en tot 2.000 MB graits</p>--}}
{{--                    </div>--}}
{{--                    <button>VIEW ACTION</button>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="advantages inner-wrap">
            <div><strong>Save more with </strong>CASHBACK<strong>DELUXE</strong></div>
            <div class="list_of_advantages">
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/Advantage_icon_1.png')}} alt="">
                    </div>
                    <p class="title">Increased Cashback</p>
                    <p class="desc">Search for products with cashback up to 90% in our special section</p>
                    <button>Explore Suggestions</button>
                </div>
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/Advantage_icon_2.png')}} alt="">
                    </div>
                    <p class="title">Product Search</p>
                    <p class="desc">Find the right product among different stores in one service</p>
                    <button>Explore Suggestions</button>
                </div>
                <div>
                    <div class="list-logo">
                        <img src={{asset('images/Advantage_icon_3.png')}} alt="">
                    </div>
                    <p class="title">Instant payouts</p>
                    <p class="desc">Cashback from $ 10 in over 15 ways</p>
                    <button>Explore Suggestions</button>
                </div>
                <br clear="all">
            </div>
        </div>

        <div class="blog inner-wrap">
            <div class="bolded_text">Blog</div>
            <div class="list_of_blogs">
                <div>
                    <div class="list-logo" style="background-image:url({{asset('images/Blog_cover_1.png')}})">
                    </div>
                    <p class="date">22.11.2019</p>
                    <p class="title">The best new online stores of December</p>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <p class="read">Read more >></p>
                </div>
                <div>
                    <div class="list-logo" style="background-image:url({{asset('images/Blog_cover_2.png')}})">
                    </div>
                    <p class="date">22.11.2019</p>
                    <p class="title">The best new online stores of December</p>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <p class="read">Read more >></p>
                </div>
                <div>
                    <div class="list-logo" style="background-image:url({{asset('images/Blog_cover_3.png')}})">
                    </div>
                    <p class="date">22.11.2019</p>
                    <p class="title">The best new online stores of December</p>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <p class="read">Read more >></p>
                </div>
                <br clear="all">
            </div>
        </div>
    </div>
@endsection
