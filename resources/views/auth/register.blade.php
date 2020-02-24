@extends('layouts.app')

@section('content')
{{--    --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="loginCentre">
                <div class="loginDivs " >
                    <div class="iconLines"><a href="{{route('index')}}"><img src={{asset("images/logo3.png")}}></a> </div>
                    <div class="signupLogin">
                        <div><a href="{{route('login')}}" class="login">{{__('form.login')}}</a></div>
                        <div><a  href="{{route('register')}}" class="signUp">{{__('form.register')}}</a></div>
                    </div>
                    <button class = "loginSoc" id="loginFb" > <img src={{asset("images/loginFb.png")}} class="socImg"><div class="loginTexts">Log in with Facebook</div></button>
                    <button class = "loginSoc" id="loginTwitter" > <img src={{asset("images/loginTwitter.png")}} class="socImg"><div class="loginTexts">Log in with Facebook</div></button>
                    <button class = "loginSoc" id="loginGoogle" > <img src={{asset("images/loginGoogle.png")}} class="socImg"><div class="loginTexts">Log in with Facebook</div></button>
                    <div>Sign up with your email</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input placeholder="Email" id="email" type="email" class="loginSoc {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                        @endif

                        <input id="name" type="text" class="loginSoc {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif

                        <input id="surname" type="text" class="loginSoc {{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" placeholder="Surname" required autofocus>

                        @if ($errors->has('surname'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                        @endif

                        <input type="password"  name="password" required class = "{{ $errors->has('password') ? ' is-invalid' : '' }} loginSoc" id="emailPassword" placeholder="Password">
                        {{--                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <input id="password-confirm" type="password" class="loginSoc" name="password_confirmation" placeholder="password_confirmation" required>

                        <div >
                            <button type="submit" class="lastLogin" id="read_more">
                                {{ __('Register') }}
                            </button>
                            {{--                                <div>  <a  href="home.html"  class="lastLogin" id="read_more" >  LOGIN  </a></div>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{--    ===================================================--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--                                @if ($errors->has('name'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
