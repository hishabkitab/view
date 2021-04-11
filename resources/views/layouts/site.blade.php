<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>
	<title>@yield('title', 'Index') | {!!  'Hishb Kitab' !!}</title>

@include('view::components.common.meta')

@include('view::components.common.favicon')

@include('view::components.common.webfont')

<!-- Components Vendor Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">


@stack('style')

<!-- Theme Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/site.css') }}">
	
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

<!-- Global Vendor -->
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Components Vendor  -->
<script src="{{ asset('assets/vendors/jquery.parallax.js') }}"></script>
<script src="{{ asset('assets/vendors/typedjs/typed.min.js') }}"></script>
<script src="{{ asset('assets/vendors/slick-carousel/slick.min.js') }}"></script>
<script src="{{ asset('assets/vendors/counters/waypoint.min.js') }}"></script>
<script src="{{ asset('assets/vendors/counters/counterup.min.js') }}"></script>

<!-- Theme Settings and Calls -->
<script src="{{ asset('/js/global.js') }}"></script>

<!-- Theme Components and Settings -->
<script src="{{ asset('/js/vendors/parallax.js') }}"></script>
<script src="{{ asset('/js/vendors/carousel.js') }}"></script>
<script src="{{ asset('/js/vendors/counters.js') }}"></script>
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
