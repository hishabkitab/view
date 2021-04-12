<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<!-- Head -->
<head>
    <title>@yield('title', 'Index') | {{ config('app.name', 'Hishab Kitab') }}</title>

    <!-- Required Meta Tags -->
@include('view::components.meta')
<!-- Favicon-->
@include('view::components.favicon')
<!-- Web Fonts-->
@include('view::components.webfont')

<!-- Components Vendor Styles -->
@stack('style')

<!-- Module Styles -->
@yield('module-style')

<!-- Notification Plugins Styles -->
   {{-- @notify_css--}}

    <!-- Custom Overwrite CSS -->
    @stack('css')

</head>
<!-- End Head -->

<body>

@yield('body')

<!-- Global Vendor -->
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Notification Plugins Scripts -->
{{--@notify_js--}}

<!-- Module Styles -->
@yield('module-script')

<!-- Components Vendor Scripts -->
@stack('script')

@stack('js')

{{--@notify_render--}}
</body>
</html>
