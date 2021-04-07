<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>
    <title>@yield('title', 'Index') | {!!  'Hishb Kitab' !!}</title>

@include('view::components.common.meta')

@include('view::components.common.favicon')

@include('view::components.common.webfont')

<!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.css') }}">
    <!-- Components Vendor Styles -->
@stack('style')

<!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/theme.css') }}">

    <!-- Custom Overwrite CSS -->
    @stack('css')

</head>
<!-- End Head -->

<body>
<main class="container-fluid w-100" role="main">
    <div class="row">
        @yield('content')
    </div>
</main>

<!-- Global Vendor -->
<script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery.migrate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>

@stack('script')

@stack('js')
</body>
</html>
