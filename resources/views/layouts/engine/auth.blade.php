<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<!-- Head -->
<head>
	<title>@yield('title', 'Index') | {!!  'Hishb Kitab' !!}</title>

@include('view::components.common.meta')

@include('view::components.common.favicon')

@include('view::components.common.webfont')

<!-- Components Vendor Styles -->
	@notifyCss
@stack('style')

<!-- Theme Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/client.css') }}">
	
	<!-- Custom Overwrite CSS -->
	@stack('css')

</head>
<!-- End Head -->

<body>


<!-- Global Vendor -->
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

@notifyJs
@stack('script')

@stack('js')
@include('notify::messages')
</body>
</html>
