<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('view::components.common.meta')

    @include('view::components.common.favicon')

    <title>@yield('title') | {{ config('app.name', 'Hishab Kitab') }}</title>

    <!-- web fonts -->
    @include('view::components.common.webfont')

<!-- vendor css -->
    @stack('style')
    <link href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('/css/dashforge.css') }}">

    <!--Theme CSS -->
    @include('view::components.common.skin', ['skin' => 'light'])

<!-- Page CSS-->
    @include('view::components.common.page', ['page' => NULL])

<!-- overwrite CSS -->
    @stack('css')
</head>
<body class="mn-ht-100v d-flex flex-column">

@include('view::partials.app.navbar')

@yield('content')

@include('view::partials.app.footer')

<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
@stack('script')

<script src="{{ asset('/js/dashforge.js') }}"></script>
@stack('js')

</body>
</html>
