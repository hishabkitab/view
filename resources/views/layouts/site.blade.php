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
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/styles.css') }}">

<!-- Custom Overwrite CSS -->
@stack('css')

</head>
<!-- End Head -->

<body>
<!-- Header -->
<header>
    @include('view::partials.site-nav')

    @yield('promo-block')
</header>
<!-- End Header -->

<main role="main">
    @yield('content')
</main>

@include('view::partials.site-footer')

<!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- Global Vendor -->
<script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery.migrate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Components Vendor  -->
<script src="{{ asset('assets/vendors/jquery.parallax.js') }}"></script>
<script src="{{ asset('assets/vendors/typedjs/typed.min.js') }}"></script>
<script src="{{ asset('assets/vendors/slick-carousel/slick.min.js') }}"></script>
<script src="{{ asset('assets/vendors/counters/waypoint.min.js') }}"></script>
<script src="{{ asset('assets/vendors/counters/counterup.min.js') }}"></script>

<!-- Theme Settings and Calls -->
<script src="{{ asset('assets/js/global.js') }}"></script>

<!-- Theme Components and Settings -->
<script src="{{ asset('assets/js/vendors/parallax.js') }}"></script>
<script src="{{ asset('assets/js/vendors/carousel.js') }}"></script>
<script src="{{ asset('assets/js/vendors/counters.js') }}"></script>
<!-- END JAVASCRIPTS -->

<script>
    $(document).on('ready', function () {
        // initialization of text animation (typing)
        $(".js-display-typing").typed({
            strings: [
                "Stream",
                "Creative",
                "Innovative"
            ],
            typeSpeed: 60,
            loop: true,
            backDelay: 2500
        });
    });
</script>
</body>
<!-- End Body -->
</html>
