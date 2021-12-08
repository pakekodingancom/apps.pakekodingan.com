<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pakekodingan</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    {{-- plugin css file --}}
    @yield('PluginCssFile')

    {{-- project css file --}}
    <link rel="stylesheet" href="{{ asset('assets/css/my-task.style.min.css') }}">
</head>
<body>

<div id="mytask-layout" class="theme-indigo">
    
    <!-- sidebar -->
    @include('layouts/sidebar')

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        {{-- Body: Header --}}
        @include('layouts/header')

        {{-- Body: Body --}}
        @yield('Body')
        
    </div>
</div>

{{-- Jquery Core Js --}}
@yield('JqueryCoreJs')

{{-- Plugin Js --}}
@yield('PluginJs')

{{-- Jquery Page Js --}}
@yield('JqueryPageJs')

{{-- Js Custom --}}
@yield('JsCustom')

</body>
</html> 