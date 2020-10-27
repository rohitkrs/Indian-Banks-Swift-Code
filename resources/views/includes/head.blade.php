    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('seo_desc')">
    <meta name="keywords" content="" />
    <link rel="icon" href="favicon.ico">

    <title>@yield('title')</title>
    <link rel="canonical" href="{{ Request::url() }}">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('seo_desc')" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="IFSC Code" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('seo_desc')" />
    <meta property="twitter:url" content="{{ Request::url() }}" />  
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">