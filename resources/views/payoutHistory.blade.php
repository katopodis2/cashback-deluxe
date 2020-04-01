@extends('layouts.app')
@section('content')
    <div class="homePayoutHistory">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="payoutHistory">
            <div>
                <div class="title">Payout history</div>
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
            </div>
            <div class="payoutHistory2">
                <div class="period1">

                    <div>Period</div>
                    <div class="payoutDiv2 ">
                        <div style="background-image: url(images/calendar.png); width: 20px; height: 20px; "></div>
                        <div id="periodP"> 22 Oct 2019 - 25 Oct 2019</div>
                    </div>
                </div>
                <div class="period2">
                    <div>Status</div>

                    <div>
                        <select class="selectAllPayouts">
                            <option class="options">All payouts</option>
                            <option class="options">Pending</option>
                            <option class="options">Paid</option>
                            <option class="options">Declined</option>

                        </select>
                    </div>
                </div>
            </div>

            <div class="commDiv">
                <div>No results found. Try modifying filters.</div>
            </div>

        </div>

    </div>
@endsection
