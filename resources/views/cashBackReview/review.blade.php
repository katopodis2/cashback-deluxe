<?php
    $ids = [];
    $validError = false;
    if($errors->count() != 0){
        $validError = true;
    }
?>
@extends('layouts.app')
@section('content')

    <div class="homeBringFriend">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif

        <div class="revewMainDiv">

            <div class="top_background" style="background-image:url({{asset('images/9471.png')}})">
                <div class="container">
                    <div class="cashback" id="about">About</div>
                    <div id="cashback">CASHBACK<strong>DELUXE</strong></div>
                </div>
            </div>
            <div class="section3">
                <div class="text">
                    <p class="servises">CASHBACKDELUXE</p>
                    <div class="p3">
                        <p> Casbackdeluxe is opgericht door 2 jonge ondernemers.
                        </p> <br>
                        <p>
                            Zoals het woord ondernemers al aangeeft, houden wij ondernemen.
                        </p> <br>
                        <p>
                            Bij ondernemen hoort het inspelen op trends. En doordat wij zagen dat het begrip ‘cashback’
                            steeds
                            populairder wordt, wilde we hier iets mee doen.
                            Het werkt als volgt: door het verenigen van tientallen winkels, technologieën en ontwerpen,
                            kan Cashbackdeluxe een mooie cashbackservice bieden om al je aankopen echt zuinig te maken.
                        </p> <br>
                        <p>
                            One hundred years ago, cash was king. People got paid in cash, carried it in their wallets,
                            and
                            bought
                            things
                            with it at the local store. Payment was easy.
                        </p><br>
                        <p>
                            Zo kan je namelijk tot ..% van het aankoopbedrag op je aankopen terugkrijgen bij allerlei
                            verschillende winkels en services.
                        </p> <br>
                    </div>
                </div>
            </div>

            <div>
                <p class="servises">Our service is</p>
                <div class="ourService">
                    <div>
                        <div class="serviceDivs ">
                            <img src="{{asset('images/students.png')}}" alt="">
                            <p class="serviceP" id="serviceP1">Over 2,000,000 satisfied customers</p>
                        </div>
                        <div class="serviceDivs ">
                            <img src="{{asset('images/iStock.png')}}" alt="">
                            <p class="serviceP">Worldwide Shipping</p>
                        </div>
                        <div class="serviceDivs ">
                            <img src="{{asset('images/procent.png')}}" alt="">
                            <p class="serviceP">High commissions up to 50%</p>
                        </div>
                        <div class="serviceDivs" id="credit">
                            <img src="{{asset('images/kredit.png')}}" alt="">
                            <p class="serviceP ">Stable, regular payments in a convenient way.</p>
                        </div>
                        <div class="serviceDivs">
                            <img src="{{asset('images/mobile.png')}}" alt="">
                            <p class="serviceP" id="serviceP4"> 1200+ online stores </p>
                        </div>
                        <div class="serviceDivs" id="axjik">
                            <img src="{{asset('images/axjik.png')}}" alt="">
                            <p class="serviceP">24/7 support</p>
                        </div>
                    </div>
                </div>
                <div class="start" role="button">
                    <p class="startP">START NOW</p>
                </div>
            </div>

            <div>
                <p class="servises">Review</p>
                <div class="revewPageCardSPadding">
                @foreach($reviews as $review)
                    <div>
                        <div class="cardReview" id="cardMargin">
                            <div class="revuewUserAndText">
                                <div class="marginItems"><img src="{{asset('images/reviewUser.png')}}"></div>
                                <div class="marginItems" id="userName">{{$review->user->name}}</div>
{{--                                <div class="soc">--}}
{{--                                    <div class="space"><img src="{{asset('images/twitter.png')}}"/></div>--}}
{{--                                    <div class="space"><img src="{{asset('images/facebook.png')}}"/></div>--}}
{{--                                    <div class="space"><img src="{{asset('images/instagram.png')}}"/></div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="p">
                                <div class="amsativ">{{$review->created_at}}</div>
                                <div>
                                    {{$review->comment}}
                                </div>
                            </div>
                            <div class="starRow">
                                @include('stores.star',['overall' => $review->overall_assessment])
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{$reviews->links()}}
                @if(auth()->user() && !(bool) auth()->user()->cashBackReview)
                    <div class="start" onclick="showCommFunction()" role="button" id="addRev">
                        <p type="button" class="startP">ADD REVIEW</p>
                    </div>
                @endif
            </div>
            <div class="revewPageComment" id="ratingAmdComm" style="display: none">
                @include('cashBackReview.create')
            </div>
        </div>
    </div>
</div>
@endsection
@push('bottom_js')
    <script>
        function showCommFunction() {
            var comm = document.getElementById("ratingAmdComm");
            comm.style.display = "block";

            var addRev = document.getElementById("addRev");
            addRev.style.display = 'none';
        }

        function hideCommFunction() {
            var comm = document.getElementById("ratingAmdComm");
            comm.style.display = "none";

            var addRev = document.getElementById("addRev");
            addRev.style.display = 'block';
        }
        let validError = "<?php echo $validError ?>"
        if(validError){
            showCommFunction();
            document.getElementById('ratingAmdComm').scrollIntoView()
        }
    </script>
    @endpush
