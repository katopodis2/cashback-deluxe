@extends('layouts.app')

@section('content')
    <div class="homePayoutHistory">
        @if(auth()->user())
            @include("partials.left-menu")
        @endif
        <div class="myCashBackDivs">
            <div class="cashTitle">
                <div class="titleWidth">Cashback Claim</div>
                <div class="titlenarrow">If you believe that cashback has not been registered or has been rejected, you
                    can apply here. Claim must be filed within 3 weeks of order / request. If you file a claim, the
                    terms of the claim apply. Read this carefully before submitting a claim.
                </div>
            </div>
            <div class="cashDiv">
                <div class="appealWidth">Appeal for a cashback</div>

                <div class="appealCashFlex">
                    <div class="appealCash">
                        <div class="titlesOfSections">Reason of the claim
                            <div style="color: #ff7200;"> *</div>
                        </div>
                        <select class="selects">
                            <option>Make a choice</option>
                            <option>No cashback</option>
                            <option>Unjusly rejected</option>
                            <option>Incorrect cashback amount</option>
                        </select>
                    </div>
                    <div class="appealCash">
                        <div class="appealCash">
                            <div class="titlesOfSections">Order number
                                <div style="color: #ff7200;"> *</div>
                            </div>
                            <input class="selects">
                        </div>
                    </div>
                </div>
                <div class="appealCashFlex">

                    <div class="appealCash">
                        <div class="titlesOfSections">Which webshop
                            <div style="color: #ff7200;"> *</div>
                        </div>
                        <select class="selects">
                            <option></option>
                        </select>
                    </div>
                    <div class="appealCash">
                        <div class="titleOfCheckbox">Did you ordered through the
                            webshop?
                            <div style="color: #ff7200;"> *</div>
                        </div>
                        <div class="checkboxFlex">
                            <div>
                                <label class="container">
                                    <input type="radio" name="radio">
                                    <span class="checkmarkMyCashPage"></span>
                                    Yes
                                </label>
                            </div>
                            <div>
                                <label class="container">
                                    <input type="radio" name="radio">
                                    <span class="checkmarkMyCashPage"></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr">
                <div class="hrDown"> The costumer has to fill in a PDF, JPG or PNG file of the receipt</div>
                <div class="leaves"> LEAVES</div>
                <div class="additionalInformation">Additional information</div>

                <div class="addionalFlex">
                    <div>
                        <div>Explanation</div>
                        <textarea class="textarea"></textarea>
                    </div>
                    <div>
                        <div class="appealCash">
                            <div>Order amount</div>
                            <input class="selects">
                        </div>
                        <div class="appealCash">
                            <div>Expected cashback amount</div>
                            <input class="selects">
                        </div>
                    </div>
                </div>
                <div>
                    <hr class="hr">

                    <label class="container">
                        <input type="checkbox" name="radio">
                        <span class="checkmark" id="checkmark"></span>
                        <div class="agreePFlex" id="agreePFlex">
                            <div class="agreeP">I agree with the</div>
                            <div class="agreePOrange"> Claim Terms *</div>
                        </div>
                    </label>
                    <div class="submit">SUBMIT A CASHBACK CLAIM</div>

                </div>


            </div>
        </div>

    </div>
@endsection
