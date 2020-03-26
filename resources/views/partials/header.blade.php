<div id="app">
{{--    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
{{--        <div class="container">--}}
            <header>
                <div class="heading">
                    <div class="menu">
                        @if(auth()->user())
                            <div class="iconLines" ><div><img src="{{asset("images/iconMenu.jpg")}}" onClick="display()"></div> </div>
                        @endif
                        <a class="navbar-brand" href="{{ url('/') }}"><div class="img"><img src={{asset("images/logo3.png")}} > </div></a>
                        <div class="search_field">
                            <input type="text" placeholder="{{__("global.search_cashBack")}}">
                            <div type="submit">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
{{--                        <div class="buttons">--}}
{{--                            <div class="user"> <img src="images//user.png"></div>--}}
{{--                        </div>--}}
                    <!-- navbar-laravel-->
                        <nav class="navbar navbar-expand-md navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a id="login" class="nav-link" href="{{ route('login') }}">{{ __('form.login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a id="signup"  class="nav-link" href="{{ route('register') }}">{{ __('form.register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('global.logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
{{--        </div>--}}


{{--    <main class="py-4">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
</div>
