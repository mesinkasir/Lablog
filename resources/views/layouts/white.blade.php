<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
<meta name="description" content="@yield('description')"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="http://fonts.cdnfonts.com/css/caviar-dreams" rel="stylesheet">
                <style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');

html, body,

p {
    font: 100 1.115rem/1.275rem 'Quicksand', sans-serif;
}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary text-white shadow-sm text-center">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img class="img-fluid" width="80" src="{{ asset('images/logo.png') }}"/>
                </a>
                <button class="navbar-toggler rounded-circle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                <a class="nav-link text-white" href="{{ url('/') }}"><img class="img-fluid" width="20" src="{{ asset('images/hm.png') }}"/> {{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('site/about') }}"><img class="img-fluid" width="20" src="{{ asset('images/about.png') }}"/> {{ __('About') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('site/menu') }}"><img class="img-fluid" width="20" src="{{ asset('images/webs (1).png') }}"/> {{ __('Menu') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('site/blog') }}"><img class="img-fluid" width="20" src="{{ asset('images/blog.png') }}"/>{{ __('Blog') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('site/gallery') }}"><img class="img-fluid" width="20" src="{{ asset('images/gall.png') }}"/> {{ __('Gallery') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('site/promo') }}"><img class="img-fluid" width="20" src="{{ asset('images/prom.png') }}"/> {{ __('Promo') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('site/event') }}"><img class="img-fluid" width="20" src="{{ asset('images/webs (5).png') }}"/> {{ __('Event') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('shop') }}"><img class="img-fluid" width="20" src="{{ asset('images/shop.png') }}"/> {{ __('Shop') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('site/contact') }}"><img class="img-fluid" width="20" src="{{ asset('images/webs (4).png') }}"/> {{ __('Contact') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}"><img class="img-fluid" width="20" src="{{ asset('images/login.png') }}"/> {{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
          <a href="{{ url('/home') }}" class="list-group-item list-group-item-action"><img class="img-fluid" width="60" src="{{ asset('images/home.png') }}"/> <br/>Home</a>                        
         <a href="{{ url('/management') }}" class="list-group-item list-group-item-action"><img class="img-fluid" width="60" src="{{ asset('images/group.png') }}"/><br/> Database</a>
          <a href="{{ url('/article') }}" class="list-group-item list-group-item-action"><img class="img-fluid" width="60" src="{{ asset('images/menu.png') }}"/> <br/>Website</a>
          <a href="{{ url('/cashier') }}" class="list-group-item list-group-item-action"><img class="img-fluid" width="60" src="{{ asset('images/pos.png') }}"/> <br/>POS</a>
          <a href="{{ url('/report') }}" class="list-group-item list-group-item-action"><img class="img-fluid" width="60" src="{{ asset('images/report.png') }}"/> <br/>Report</a>
                            <li class="list-group-item list-group-item-action nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img class="img-fluid" src="{{ asset('images/admin.png') }}" width="60"/>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
          <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <img class="img-fluid" width="20" src="{{ asset('images/off.png') }}"/>
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
            @yield('content')
        </main>
    </div>

    <div class="col-12 p-1 text-center fixed-bottom">
Build with dexopos web apps
    </div>
</body>
</html>
