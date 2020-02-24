@extends('layouts.app')

@section('content')
    {{--   start new login --}}

{{--    <div class="loginCentre">--}}
{{--        <div class="loginDivs " >--}}
{{--            <div class="iconLines"><img src={{asset("images/logo3.png")}}> </div>--}}
{{--            <div class="signupLogin">--}}
{{--                <div class="signUp">Login</div>--}}
{{--                <div class="login">Sign up</div>--}}
{{--            </div>--}}
{{--            <button class = "loginSoc" id="loginFb" > <img src={{asset("images/loginFb.png")}} class="socImg"><div class="loginTexts">Log in with Facebook</div></button>--}}
{{--            <button class = "loginSoc" id="loginTwitter" > <img src={{asset("images/loginTwitter.png")}} class="socImg"><div class="loginTexts">Log in with Facebook</div></button>--}}
{{--            <button class = "loginSoc" id="loginGoogle" > <img src={{asset("images/loginGoogle.png")}} class="socImg"><div class="loginTexts">Log in with Facebook</div></button>--}}
{{--            <div>Sign up with your email</div>--}}
{{--            <input type="email" class = "loginSoc" id="emailPassword" placeholder="Email">--}}
{{--            <input type="password" class = "loginSoc" id="emailPassword" placeholder="Password">--}}
{{--            <div class="loginForgot">Forgot password?</div>--}}
{{--            <div >--}}
{{--                <div>  <a  href="home.html"  class="lastLogin" id="read_more" >  LOGIN  </a></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    {{--    end--}}
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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <input placeholder="Email" id="email" type="email" class="loginSoc {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                                <input type="password"  name="password" required class = "{{ $errors->has('password') ? ' is-invalid' : '' }} loginSoc" id="emailPassword" placeholder="Password">
                                {{--                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                <div class="loginForgot">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
{{--                                Forgot password?--}}
                                </div>

                                <div >
                                    <button type="submit" class="lastLogin" id="read_more">
                                        {{ __('Login') }}
                                    </button>
    {{--                                <div>  <a  href="home.html"  class="lastLogin" id="read_more" >  LOGIN  </a></div>--}}
                                </div>
                            </form>
                        </div>
                    </div>


{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('login') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input type="email" class = "loginSoc" id="emailPass" placeholder="Email">--}}
{{--                                    <input placeholder="Email" id="email" type="email" class="loginSoc form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

{{--                                    @if ($errors->has('email'))--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}
{{--                                <label for="emailPassword" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input type="password"  name="password" required class = "form-control{{ $errors->has('password') ? ' is-invalid' : '' }} loginSoc" id="emailPassword" placeholder="Password">--}}
{{--                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

{{--                                    @if ($errors->has('password'))--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                        <label class="form-check-label" for="remember">--}}
{{--                                            {{ __('Remember Me') }}--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-8 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Login') }}--}}
{{--                                    </button>--}}

{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                            {{ __('Forgot Your Password?') }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
            </div>
        </div>
    </div>
@endsection
