<header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand">
        @include('view::components.navbar.logo')
        @yield('logo')
    </div><!-- navbar-brand -->
    <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
            @yield('logo')
            <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div>
        <!-- navbar-menu-header -->
        @include("view::components.navbar.menu")
    </div>
    <!-- navbar-menu-wrapper -->
    <div class="navbar-right">
        @include("view::components.navbar.search")

        @yield('search-btn')

        @auth
            @include("view::components.navbar.dropdown.message")
            @include("view::components.navbar.dropdown.profile")
        @else
            @include("view::components.navbar.dropdown.notification")
            @include('view::components.navbar.entry')
        @endauth

    </div>
    <!-- navbar-right -->
    @yield('search-panel')
</header>
<!-- navbar -->
