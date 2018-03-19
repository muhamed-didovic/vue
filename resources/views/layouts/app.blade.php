<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
                'apiToken' => (auth()->user()->api_token ?? ''),
            ]) !!};
    </script>

    <!-- Styles -->
    @yield('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    {{--<router-link tag="li" to="/" exact>--}}
                        {{--<a class="nav-link" >Home</a>--}}
                    {{--</router-link>--}}

                    <router-link tag="li" to="/modal">
                        <a class="nav-link" >Modal</a>
                    </router-link>

                    <router-link tag="li" to="/example">
                        <a class="nav-link" >Example</a>
                    </router-link>

                    <router-link tag="li" to="/scoped-slot">
                        <a class="nav-link" >Scoped Slot</a>
                    </router-link>

                    <router-link tag="li" to="/custom-input">
                        <a class="nav-link" >Custom Input</a>
                    </router-link>

                    <router-link tag="li" to="/shared">
                        <a class="nav-link" >Shared</a>
                    </router-link>

                    <router-link tag="li" to="/forms">
                        <a class="nav-link" >Forms</a>
                    </router-link>

                    <router-link tag="li" to="/tasks">
                        <a class="nav-link" >Tasks</a>
                    </router-link>

                    <router-link tag="li" to="/tabs">
                        <a class="nav-link" >Tabs</a>
                    </router-link>

                    <router-link tag="li" to="/coupon">
                        <a class="nav-link" >Coupon</a>
                    </router-link>

                    <router-link tag="li" to="/named">
                        <a class="nav-link" >Named Slot</a>
                    </router-link>

                    <router-link tag="li" to="/progress">
                        <a class="nav-link" >Progress-Inline</a>
                    </router-link>

                    <router-link tag="li" to="/todo">
                        <a class="nav-link" >Todo</a>
                    </router-link>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
        {{--<div class="card">--}}
        {{--<div class="card-header">Testing</div>--}}

        {{--<div class="card-body">--}}



        {{--<input type="text" v-model="message">--}}
        {{--This is @{{message}} for you!!!--}}

        {{--<task>Test 1</task>--}}
        {{--<task>Test 2</task>--}}
        {{--<task>Test 3</task>--}}

        {{--Home--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--@yield('content')--}}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Components</div>

                        <div class="card-body">

                            <router-view></router-view>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
</div>


<!-- Scripts -->
@yield('js')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
