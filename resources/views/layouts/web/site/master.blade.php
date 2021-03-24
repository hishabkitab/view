<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('view::components.common.meta')

    @include('view::components.common.favicon')

    <title>@yield('title') | {{ config('app.name', 'Hishab Kitab') }}</title>

    <!-- vendor css -->
    @stack('style')
    <link href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('/css/dashforge.css') }}">

    <!--Theme CSS -->
    @include('view::components.common.skin', ['skin' => 'cool'])

    <!-- overwrite CSS -->
    @stack('css')
</head>
<body class="home-body">
@include('view::partials.web.site.navbar')

@yield('content')


{{--
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sales Monitoring</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
            </div>
        </div>

    </div><!-- container -->
</div>
<!-- content -->
--}}
@include('view::partials.web.site.footer')

<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
@stack('script')

<script src="{{ asset('/js/dashforge.js') }}"></script>

@stack('js')

</body>
</html>
