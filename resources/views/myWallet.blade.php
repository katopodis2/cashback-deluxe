@extends('layouts.app')

@section('content')
    <div class="homePayoutHistory">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="payoutHistory">
            <div>
                <div class="title">My wallet</div>
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

            <div>
                <div class="title">Withdrawal methods</div>
                <div class="payoutDivs2">
                    <div class="alignCentertDiv ">
                        <div class="imgCenter"><img src="./images/mastercard.png"/></div>
                        <div class="spaceDivs">
                            <div>
                                <div>Bank card</div>
                                <div class="titlenarrow">Payout from</div>
                                <div class="titlenarrow" id="dexinP"> $15</div>
                            </div>
                            <div>
                                <div>Commission</div>
                                <div class="titlenarrow">from 2.7%*</div>
                            </div>
                        </div>
                    </div>
                    <div class="alignCentertDiv ">
                        <div class="imgCenter"><img src="./images/visa.png"/></div>
                        <div class="spaceDivs">
                            <div>
                                <div>Bank card</div>
                                <div class="titlenarrow">Payout from</div>
                                <div class="titlenarrow" id="dexinP">$15</div>
                            </div>

                            <div>
                                <div>Commission</div>
                                <div class="titlenarrow">from 2.7%*</div>
                            </div>
                        </div>
                    </div>


                    <div class="alignCentertDiv ">
                        <div class="imgCenter"><img src="./images/paypal.png"/></div>
                        <div class="spaceDivs">
                            <div>
                                <div>Bank card</div>
                                <div class="titlenarrow">Payout from</div>
                                <div class="titlenarrow" id="dexinP">$15</div>
                            </div>
                            <div>
                                <div>Commission</div>
                                <div class="titlenarrow">from 2.7%*</div>
                            </div>
                        </div>
                    </div>
                    <div class="alignCentertDiv ">
                        <div class="imgCenter"><img src="./images/american-express.png"/></div>
                        <div class="spaceDivs">
                            <div>
                                <div>Bank card</div>
                                <div class="titlenarrow">Payout from</div>
                                <div class="titlenarrow" id="dexinP">$15</div>
                            </div>
                            <div>
                                <div>Commission</div>
                                <div class="titlenarrow">from 2.7%*</div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>

        </div>
    </div>
@endsection
