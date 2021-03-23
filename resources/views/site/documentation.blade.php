@extends('view::layouts.web.site.master')

@push('style')
    <link href="{{ asset('/vendor/typicons.font/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/prismjs/themes/prism.css') }}" rel="stylesheet">
@endpush

@push('css')
    {!!  Html::style('css/pages/demo.css') !!}
@endpush

@section('content')
    <div id="sidebarMenu" class="sidebar sidebar-fixed sidebar-components">
        <div class="sidebar-header">
            <a href="" id="mainMenuOpen"><i data-feather="menu"></i></a>
            <h5>Components</h5>
            <a href="" id="sidebarMenuClose"><i data-feather="x"></i></a>
        </div><!-- sidebar-header -->
        <div class="sidebar-body">
            <ul class="sidebar-nav">
                <li class="nav-label mg-b-15">Browse Components</li>
                <li class="nav-item"><a href="index.html" class="nav-link"><i data-feather="layout"></i>
                        Introduction</a></li>
                <li class="nav-item"><a href="grid.html" class="nav-link active"><i data-feather="grid"></i> Grid System</a>
                </li>
                <li class="nav-item show">
                    <a href="" class="nav-link with-sub"><i data-feather="layers"></i> UI Elements</a>
                    <nav class="nav">
                        <a href="el-accordion.html">Accordion</a>
                        <a href="el-alerts.html">Alerts</a>
                        <a href="el-avatar.html">Avatar</a>
                        <a href="el-badge.html">Badge</a>
                        <a href="el-breadcrumbs.html">Breadcrumbs</a>
                        <a href="el-buttons.html">Buttons</a>
                        <a href="el-button-groups.html">Button Groups</a>
                        <a href="el-cards.html">Cards</a>
                        <a href="el-carousel.html">Carousel</a>
                        <a href="el-collapse.html">Collapse</a>
                        <a href="el-dropdown.html">Dropdown</a>
                        <a href="el-icons.html">Icons</a>
                        <a href="el-images.html">Images</a>
                        <a href="el-list-group.html">List Group</a>
                        <a href="el-marker.html">Marker</a>
                        <a href="el-media-object.html">Media Object</a>
                        <a href="el-modal.html">Modal</a>
                        <a href="el-navs.html">Navs</a>
                        <a href="el-navbar.html">Navbar</a>
                        <a href="el-off-canvas.html">Off-Canvas</a>
                        <a href="el-pagination.html">Pagination</a>
                        <a href="el-placeholder.html">Placeholder</a>
                        <a href="el-popovers.html">Popovers</a>
                        <a href="el-progress.html">Progress</a>
                        <a href="el-steps.html">Steps</a>
                        <a href="el-scrollbar.html">Scrollbar</a>
                        <a href="el-scrollspy.html">Scrollspy</a>
                        <a href="el-spinners.html">Spinners</a>
                        <a href="el-tab.html">Tab</a>
                        <a href="el-toast.html">Toast </a>
                        <a href="el-tooltips.html">Tooltips</a>
                        <a href="el-table-basic.html">Table Basic</a>
                        <a href="el-table-advanced.html">Table Advanced</a>
                    </nav>
                </li>
                <li class="nav-item show">
                    <a href="" class="nav-link with-sub"><i data-feather="package"></i> Utilities</a>
                    <nav class="nav">
                        <a href="util-animation.html">Animation</a>
                        <a href="util-background.html">Background</a>
                        <a href="util-border.html">Border</a>
                        <a href="util-display.html">Display</a>
                        <a href="util-divider.html">Divider</a>
                        <a href="util-flex.html">Flex</a>
                        <a href="util-height.html">Height</a>
                        <a href="util-margin.html">Margin</a>
                        <a href="util-padding.html">Padding</a>
                        <a href="util-position.html">Position</a>
                        <a href="util-typography.html">Typography</a>
                        <a href="util-width.html">Width</a>
                        <a href="util-extras.html">Extras</a>
                    </nav>
                </li>
                <li class="nav-item show">
                    <a href="" class="nav-link with-sub"><i data-feather="inbox"></i> Forms</a>
                    <nav class="nav">
                        <a href="form-elements.html">Form Elements</a>
                        <a href="form-input-group.html">Input Group</a>
                        <a href="form-input-tags.html">Input Tags</a>
                        <a href="form-input-masks.html">Input Masks</a>
                        <a href="form-layouts.html">Form Layouts</a>
                        <a href="form-validation.html">Form Validation</a>
                        <a href="form-wizard.html">Form Wizard</a>
                        <a href="form-text-editor.html">Text Editor</a>
                        <a href="form-rangeslider.html">Range Slider</a>
                        <a href="form-datepicker.html">Date Pickers</a>
                        <a href="form-select2.html">Select2</a>
                        <a href="form-search.html">Search</a>
                    </nav>
                </li>
                <li class="nav-item show">
                    <a href="" class="nav-link with-sub"><i data-feather="pie-chart"></i> Charts</a>
                    <nav class="nav">
                        <a href="chart-flot.html">Flot</a>
                        <a href="chart-chartjs.html">ChartJS</a>
                        <a href="chart-peity.html">Peity</a>
                        <a href="chart-sparkline.html">Sparkline</a>
                        <a href="chart-morris.html">Morris</a>
                    </nav>
                </li>
                <li class="nav-item show">
                    <a href="" class="nav-link with-sub"><i data-feather="map-pin"></i> Maps</a>
                    <nav class="nav">
                        <a href="map-google.html">Google Maps</a>
                        <a href="map-leaflet.html">Leaflet Maps</a>
                        <a href="map-vector.html">Vector Maps</a>
                    </nav>
                </li>
            </ul>
        </div><!-- sidebar-body -->
    </div><!-- sidebar -->

    <div class="section-nav">
        <label class="nav-label">On This Page</label>
        <nav id="navSection" class="nav flex-column">
            <a href="#section1" class="nav-link">How It Works</a>
            <a href="#section2" class="nav-link">Setting One Column Width</a>
            <a href="#section3" class="nav-link">Gutters</a>
            <a href="#section4" class="nav-link">No Gutters</a>
            <a href="#section5" class="nav-link">Reordering</a>
            <a href="#section6" class="nav-link">Offsetting Columns</a>
        </nav>
    </div><!-- section-nav -->

    <div class="content content-components">
        <div class="container">
            <ol class="breadcrumb df-breadcrumbs mg-b-10">
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Grid System</li>
            </ol>

            <h1 class="df-title">Grid System</h1>
            <p class="df-lead">Use Bootstrap's powerful mobile-first flexbox grid to build layouts of all shapes and
                sizes. Read the <a href="https://getbootstrap.com/docs/4.2/layout/grid/">Official Bootstrap
                    Documentation</a> for a full list of instructions and other options.</p>

            <hr class="mg-y-40">

            <h4 id="section1" class="mg-b-10">How it Works</h4>
            <p class="mg-b-30">Bootstrap’s grid system uses a series of containers, rows, and columns to layout and
                align content. It’s built with flexbox and is fully responsive. Below is an example and an in-depth look
                at how the grid comes together.</p>

            <div data-label="Example" class="df-example">
                <div class="row">
                    <div class="col-sm">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">One of three columns</div>
                    </div>
                    <div class="col-sm mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">One of three columns</div>
                    </div>
                    <div class="col-sm mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">One of three columns</div>
                    </div>
                </div><!-- row -->
            </div><!-- df-example -->

            <pre><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="col-sm"&gt;One of three columns&lt;/div&gt;
  &lt;div class="col-sm"&gt;One of three columns&lt;/div&gt;
  &lt;div class="col-sm"&gt;One of three columns&lt;/div&gt;
&lt;/div&gt;</code></pre>

            <hr class="mg-t-50 mg-b-40">

            <h4 id="section2" class="mg-b-10">Setting One Column Width</h4>
            <p class="mg-b-30">Auto-layout for flexbox grid columns also means you can set the width of one column and
                have the sibling columns automatically resize around it.</p>

            <div data-label="Example" class="df-example">
                <div class="row">
                    <div class="col-sm">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                    <div class="col-sm-5 mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">2 of 3 (wider)</div>
                    </div>
                    <div class="col-sm mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                </div><!-- row -->
            </div><!-- df-example -->
            <pre><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="col-sm"&gt;...&lt;/div&gt;
  &lt;div class="col-sm-5"&gt;...&lt;/div&gt;
  &lt;div class="col-sm"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>

            <hr class="mg-t-50 mg-b-40">

            <h4 id="section3" class="mg-b-10">Gutters</h4>
            <p class="mg-b-30">Gutters can be responsively adjusted by breakpoint-specific padding and negative margin
                utility classes.</p>

            <div data-label="Default Gutter" class="df-example mg-b-30">
                <div class="row">
                    <div class="col-sm">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                    <div class="col-sm mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">2 of 3</div>
                    </div>
                    <div class="col-sm mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                </div><!-- row -->
            </div><!-- df-example -->
            <div data-label="Small Gutter" class="df-example mg-b-30">
                <div class="row row-sm">
                    <div class="col-sm">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                    <div class="col-sm mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">2 of 3</div>
                    </div>
                    <div class="col-sm mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                </div><!-- row -->
            </div><!-- df-example -->
            <div data-label="Extra Small Gutter" class="df-example">
                <div class="row row-xs">
                    <div class="col-sm">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                    <div class="col-sm mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">2 of 3</div>
                    </div>
                    <div class="col-sm mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                </div><!-- row -->
            </div><!-- df-example -->

            <pre><code class="language-html">&lt;div class="row"&gt;...&lt;/div&gt;
&lt;div class="row row-sm"&gt;...&lt;/div&gt;
&lt;div class="row row-xs"&gt;...&lt;/div&gt;</code></pre>

            <hr class="mg-t-50 mg-b-40">

            <h4 id="section4" class="mg-b-10">No Gutters</h4>
            <p class="mg-b-30">The gutters between columns in our predefined grid classes can be removed with <code>.no-gutters</code>.
                This removes the negative margins from <code>.row</code> and the horizontal padding from all immediate
                children columns.</p>

            <div data-label="Example" class="df-example">
                <div class="row no-gutters">
                    <div class="col-sm">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                    <div class="col-sm">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">2 of 3</div>
                    </div>
                    <div class="col-sm">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">1 of 3</div>
                    </div>
                </div><!-- row -->
            </div><!-- df-example -->
            <pre><code class="language-html">&lt;div class="row no-gutters"&gt;...&lt;/div&gt;</code></pre>

            <hr class="mg-t-50 mg-b-40">

            <h4 id="section5" class="mg-b-10">Reordering</h4>
            <p class="mg-b-30">Use <code>.order-</code> classes for controlling the visual order of your content. </p>

            <div data-label="Example" class="df-example">
                <div class="row">
                    <div class="col-sm order-2">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">First, but second</div>
                    </div>
                    <div class="col-sm order-3 mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">Second, but last</div>
                    </div>
                    <div class="col-sm order-1 mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">Third, but first</div>
                    </div>
                </div><!-- row -->
            </div><!-- df-example -->
            <pre><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="col-sm order-2"&gt;...&lt;/div&gt;
  &lt;div class="col-sm order-3"&gt;...&lt;/div&gt;
  &lt;div class="col-sm order-1"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>

            <hr class="mg-t-50 mg-b-40">

            <h4 id="section6" class="mg-b-10">Offsetting Columns</h4>
            <p class="mg-b-30">You can offset grid columns in two ways: our responsive .offset- grid classes and our
                margin utilities.</p>

            <div data-label="Example" class="df-example">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">.col-md-4</div>
                    </div>
                    <div class="col-sm-4 offset-sm-4 mg-t-10 mg-sm-t-0">
                        <div class="pd-y-10 pd-x-20 bg-ui-01">.col-md-4 .offset-md-4</div>
                    </div>
                </div><!-- row -->
            </div><!-- df-example -->
            <pre><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="col-sm-4"&gt;...&lt;/div&gt;
  &lt;div class="col-sm-4 offset-sm-4"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>

            <footer class="content-footer">
                <div>
                    <span>&copy; 2019 DashForge v1.0.0. </span>
                    <span>Made by <a href="http://themepixels.me">ThemePixels</a></span>
                </div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="../change-log.html" class="nav-link">Change Log</a>
                        <a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer><!-- content-footer -->

        </div><!-- container -->
    </div><!-- content -->

@endsection

@section('script')
    <script src="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/vendor/prismjs/prism.js') }}"></script>
@endsection

@section('js')

@endsection
