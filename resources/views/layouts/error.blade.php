<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('components.common.meta')

    @include('components.common.favicon')

    <title>@yield('title') | {{ config('app.name', 'Hishab Kitab') }}</title>

    <!-- vendor css -->
    @stack('style')
    <link href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('/css/dashforge.css') }}">

    <!--Theme CSS -->
    @include('components.common.skin', ['skin' => 'light'])

<!-- Page CSS-->
    @include('components.common.page', ['page' => 'auth'])
<!-- overwrite CSS -->
    @stack('css')
</head>
<body>


@include('partials.web.navbar')

<div class="content content-fixed content-auth-alt">
    <div class="container ht-100p tx-center">
        <div class="ht-100p d-flex flex-column align-items-center justify-content-center">
            @yield('emotion')
            <h1 class="tx-color-01 tx-24 tx-sm-32 tx-lg-36 mg-xl-b-5">@yield('code') @yield('title')</h1>
            <h5 class="tx-16 tx-sm-18 tx-lg-20 tx-normal mg-b-20">@yield('message')</h5>
            <p class="tx-color-03 mg-b-30">@yield('suggestion')</p>
            <div class="d-flex mg-b-40">
                <input type="text" class="form-control wd-200 wd-sm-250" placeholder="Search">
                <button class="btn btn-brand-02 bd-0 mg-l-5 pd-sm-x-25">Search</button>
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->

@include('partials.web.footer')

<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
@stack('script')

<script src="{{ asset('/js/dashforge.js') }}"></script>
@stack('js')

<script>
    $(function () {
        'use script'

        window.darkMode = function () {
            $('.btn-white').addClass('btn-dark').removeClass('btn-white');
        }

        window.lightMode = function () {
            $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
        }

        var hasMode = Cookies.get('df-mode');
        if (hasMode === 'dark') {
            darkMode();
        } else {
            lightMode();
        }
    })
</script>
</body>
</html>
