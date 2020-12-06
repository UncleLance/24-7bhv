<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h1>24/7BHV</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    @guest
                        <div class="col d-flex align-items-center justify-content-end">
                            <a class="px-3" href="">Home</a>
                            <a class="px-3" href="">Over ons</a>
                            <a class="px-3" href="">Cursussen</a>
                            <a class="px-3" href="">Blog</a>
                            <a class="px-3" href="">Contact</a>
                        </div>
                    @endguest

                    @auth
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    {{--                            @if (Route::has('register'))--}}
                                    {{--                                <li class="nav-item">--}}
                                    {{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                    {{--                                </li>--}}
                                    {{--                            @endif--}}
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        @endauth
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="container-fluid border-top">
                <div class="container">
                    <div class="row mt-5 pb-5">
                        <div class="col border-right">
                            <h2 class="mb-5">24/7BHV</h2>
                            <p class="mb-1">Contact</p>
                            <div class="">
                                <a href="tel:+31612345678">+31 6 12345678</a>
                            </div>
                            <div class="">
                                <a href="mailto:test@hotmail.com">info@247bhv.nl</a>
                            </div>
                            <div class="d-flex flex-column mt-3">
                                <a href="">Facebook</a>
                                <a href="">Linkedin</a>
                                <a href="">Instagram</a>
                                <a href="">Twitter</a>
                            </div>
                        </div>
                        <div class="col">
                            <p>Snelle links</p>
                            <ul>
                                <li class="py-1"><a href="">1</a></li>
                                <li class="py-1"><a href="">2</a></li>
                                <li class="py-1"><a href="">3</a></li>
                                <li class="py-1"><a href="">4</a></li>
                                <li class="py-1"><a href="">5</a></li>
                            </ul>
                        </div>
                        <div class="col border-left">
                            <h3>Contact formulier</h3>
                            <form action="">
                                <div class="contact-form-group">
                                    <input type="text" class="w-100" placeholder="Email">
                                </div>
                                <div class="contact-form-group my-4">
                                    <textarea name="" id="" rows="10" class="w-100" ></textarea>
                                </div>
                                <div class="d-flex contact-form-group justify-content-end">
                                    <input type="submit" class="btn btn-light" value="Verstuur">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
