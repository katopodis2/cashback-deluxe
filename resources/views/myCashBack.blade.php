@extends('layouts.app')

@section('content')
    <div class="homePayoutHistory">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="payoutHistory">
            <div>
                <div class="title">My cash back</div>
            </div>
            <div class="payoutDivs">
                <div class="payoutDiv " id="payoutHistory"> Available in your CashDeluxe wallet
                    <div class="dexinP">$ 39.00</div>
                    Minimum amount for withdrawal is $1.5
                </div>
                <div class="payoutDiv " id="payoutHistory">Awaiting confirmation
                    <div class="dexinP2">$ 0.00</div>
                    <div class="kapuyt">What is cash back?</div>
                </div>
                <div class="payoutDiv " id="payoutHistory">Cashback Claim
                    <div class="applyDiv"><a href="{{route('myCashBack.myClaim')}}" class="leaves" id="apply"> APPLY +</a></div>

                    <div class="kapuyt">How Cashback Claim works?</div>
                </div>

            </div>

            <div>
                <div class="title">Orders with cash back</div>
            </div>
            <div class="cashBackDiv ">
                <div id="nike"><img src="./images/nike.png"></div>
                <div class="cashDates">22 Oct 2019</div>
                <div class="cash14Styles">
                    <div class="cash14">5% cashback</div>
                    <div class="cash14">Kerstmis deals Bespaar nu tot €300</div>
                </div>
                <div class="cashS">
                    <div class="cash1"> $ 12.05</div>
                    <div class="cash2"> 3.27%</div>
                </div>
            </div>
            <div class="cashBackDiv ">
                <div id="zara"><img src="./images/zara.png"></div>
                <div class="cashDates">22 Oct 2019</div>
                <div class="cash14Styles">
                    <div class="cash14">5% cashback</div>
                    <div class="cash14">Kerstmis deals Bespaar nu tot €300</div>
                </div>
                <div class="cashS">
                    <div class="cash1"> $ 12.05</div>
                    <div class="cash2"> 3.27%</div>
                </div>
            </div>
            <div class="cashBackDiv " id="gucciCashBackDiv">
                <div id="gucci"><img src="./images/gucci.png"></div>
                <div class="cashDates">22 Oct 2019</div>
                <div class="cash14Styles">
                    <div class="cash14">5% cashback</div>
                    <div class="cash14">Kerstmis deals Bespaar nu tot €300</div>
                </div>
                <div class="cashS">
                    <div class="cash1"> $ 12.05</div>
                    <div class="cash2"> 3.27%</div>
                </div>
            </div>


        </div>
    </div>
@endsection
