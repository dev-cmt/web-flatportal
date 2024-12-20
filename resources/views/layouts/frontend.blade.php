<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="ecommerce">

    @props(['title' => config('app.name', 'Ecommerce')])
    <title>{{ $title }}</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend')}}/img/logo/favicon.png">

    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CRoboto:300,400,500,700,900">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/fonts.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/custom.css">

    @stack('style')
</head>
<body>
    <div class="preloader">
        <div class="banter-loader">
            <div class="banter-loader__box"> </div>
            <div class="banter-loader__box"> </div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
        </div>
    </div>
    
    <div class="page">
        @include('layouts.partial.frontend-header')

        @if (Route::currentRouteName() == '/')
            @include('layouts.partial.frontend-slider')
        @endif
        {{ $slot }}
    </div>

    @include('layouts.partial.frontend-footer')

    @include('layouts.partial.frontend-theme-settings')

    <!-- Javascript-->
    <script src="{{asset('public/frontend')}}/js/core.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/script.js"></script>
    
    @stack('scripts')


    <script>
        var itemActionStoreUrl = '{{ route('item-action.store') }}';
        var csrfToken = '{{ csrf_token() }}';
        var loginUrl = '{{ route('login') }}';
    </script>
    <script src="{{ asset('public/frontend/js/ajax.min.js') }}"></script>

</body>
</html>