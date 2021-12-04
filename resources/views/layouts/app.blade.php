<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="Xi3WpckDbMBvm1pdlc5XukNoA9uWDmnExIiOeaTOxq0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="https://axcora.com/img/all%20in%20one%20point%20of%20sale.webp">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="429">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@axcora">
    <meta name="twitter:creator" content="@hockeycomp">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="https://axcora.com/img/all%20in%20one%20point%20of%20sale.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="shortcut icon" sizes="16x16" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon icon" sizes="76x76" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon icon" sizes="120x120" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon icon" sizes="152x152" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon icon" sizes="180x180" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon icon" sizes="192x192" href="{{ asset('images/logo.png') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/Quicksand" rel="stylesheet">
    <link href="{{ asset('css/lablog.css') }}" rel="stylesheet">
</head>

<body>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLNN49W" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <div id="app">
            @include('inc.navi')
        <main>
            @yield('content')
        </main>
    </div>
    <div class="col-12 p-1 text-center">
        <d>Build with <a href="https://axcora.com/lablog">lablog</a> by <a href="https://laravel.com">laravel</a> present by <a
                href="https://axcora.com">axcora</a> develope <a
                href="https://creativebydre.vercel.app">creativebydre</a></d>
    </div>
</body>

</html>
