<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<!-- Head -->
<head>
    <title>@yield('title', 'Index') | {!!  'Hishb Kitab' !!}</title>

@include('view::components.common.meta')

@include('view::components.common.favicon')

@include('view::components.common.webfont')

<!-- Components Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
@stack('style')

<!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/client.css') }}">

    <!-- Custom Overwrite CSS -->
    @stack('css')

</head>
<!-- End Head -->

<body>

<!-- Header (Topbar) -->
<header class="u-header">
    @include('view::partials.setup-nav')
</header>
<!-- End Header (Topbar) -->

<main role="main">
    <div class="u-content">
        <div class="u-body">
            <!-- End Breadcrumb -->
            <nav aria-label="breadcrumb">
                <h1 class="h3">Blank Page</h1>
                <ol class="breadcrumb bg-transparent small p-0">
                    <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            @yield('content')
        </div>
        @include('view::components.common.app-footer')

    </div>
</main>

<!-- Global Vendor -->
<script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery.migrate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script
    src="{{ asset('assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
@stack('script')

<!-- Initialization  -->
<script src="{{ asset('/js/client.js') }}"></script>

@stack('js')

</body>
</html>
