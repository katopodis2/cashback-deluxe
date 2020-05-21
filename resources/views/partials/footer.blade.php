<div class='footer'>
    <div class="container inner-wrap">
        <div>
            <div id="footer_title">CASHBACK<strong>DELUXE</strong></div>
            <div>Pellentesque in ipsum id orci porta dapibus.
                Vivamus magna justo, lacinia eget consectetur sed,
                convallis at tellus.
            </div>
        </div>
        <div>
            <div><a href="{{route('home')}}">{{__("global.home")}}</a></div>
            @if(!auth()->user())
                <div><a href="{{route('login')}}">{{__("global.sign_in")}}</a></div>
                <div><a href="{{route("register")}}">{{__("global.register")}}</a></div>
            @endif
        </div>
        <div>
            <div id="footer_title">{{__("global.aff_network")}}</div>
            <div><a href="https://www.daisycon.com/" target="_blank">Daisycon</a></div>
        </div>
        <div>
            <div><a href="{{route("faq")}}" style="color: white; text-decoration: none;">{{__("global.faq")}}</a></div>
            <div><a href="{{url(route("faq") . '#FaqTitle')}}">{{__("global.support")}}</a></div>
            <div><a href="{{route("privacy")}}">{{__("global.terms")}}</a></div>
            <div><a href="{{route('cashBackReview')}}">{{__("global.review")}}</a></div>
        </div>
        <div>
            <div id="footer_title">{{__("global.contact")}}</div>
            <div>{{__("global.callOrMessage")}}</div>
            <table>
                <tr>
                    <td valign="middle" id='footer_email'>graphberry@gmail.com</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<style>
    .footer a {
        color: white;
        text-decoration: none;
    }
</style>
