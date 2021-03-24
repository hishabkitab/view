@extends('view::layouts.web.site.master')

@push('style')
    <link href="{{ asset('/vendor/slick-carousel/slick/slick.css') }}" rel="stylesheet">
@endpush

@push('css')
    {!!  Html::style('css/pages/landing.css') !!}
@endpush

@section('content')
    <div class="home-slider">
        <div class="home-lead">
            <div class="df-logo-initial mg-b-15"><p>df</p></div>
            <p class="home-text">Responsive Bootstrap 4 Dashboard Template</p>

            <h6 class="home-headline">Make your dashboard app more professional with this <span>super awesome</span> and
                <span>premium quality</span> dashboard design template.</h6>

            <div class="d-flex wd-lg-350">
                <a href="https://themeforest.net/item/dashforge-responsive-admin-dashboard-template/23725961"
                   class="btn btn-brand-01 btn-uppercase flex-fill">Buy Now - $20</a>
                <a href="template/classic/dashboard-one.html" class="btn btn-white btn-uppercase flex-fill mg-l-10">Explore
                    Demo</a>
            </div>

            <div class="d-flex tx-20 mg-t-40">
                <div class="tx-purple"><i class="fab fa-bootstrap"></i></div>
                <div class="tx-orange pd-l-10"><i class="fab fa-html5"></i></div>
                <div class="tx-primary pd-l-10"><i class="fab fa-css3-alt"></i></div>
                <div class="tx-pink pd-l-10"><i class="fab fa-sass"></i></div>
                <div class="tx-warning pd-l-10"><i class="fab fa-js"></i></div>
                <div class="tx-danger pd-l-10"><i class="fab fa-npm"></i></div>
                <div class="tx-danger pd-l-10"><i class="fab fa-gulp"></i></div>
                <div class="bd-l mg-l-10 mg-sm-l-20 pd-l-10 pd-sm-l-20"></div>
                <div class="tx-color-03" data-toggle="tooltip" data-title="Ongoing development"><i
                        class="fab fa-angular"></i></div>
                <div class="tx-color-03 pd-l-10" data-toggle="tooltip" data-title="Coming soon"><i
                        class="fab fa-react"></i></div>
                <div class="tx-color-03 pd-l-10" data-toggle="tooltip" data-title="Coming soon"><i
                        class="fab fa-vuejs"></i></div>
            </div>

            <div class="tx-12 mg-t-40">
                <a href="docs.html" class="link-03">Doc<span class="d-none d-sm-inline">umentation</span><span
                        class="d-sm-none">s</span></a>
                <a href="changelog.html" class="link-03 mg-l-10 mg-sm-l-20">Changelog</a>
                <a href="https://themeforest.net/licenses/standard" target="_blank" class="link-03 mg-l-10 mg-sm-l-20">Licenses</a>
                <a href="https://themeforest.net/page/customer_refund_policy" target="_blank"
                   class="link-03 mg-l-10 mg-sm-l-20">Refund Policy</a>
            </div>
        </div>
        <div class="home-slider-img">
            <div><img src="{{ asset('/images/home-1.png') }}" alt=""></div>
            <div><img src="{{ asset('/images/home-2.png') }}" alt=""></div>
            <div><img src="{{ asset('/images/home-2.png') }}" alt=""></div>
        </div>
        <div class="home-slider-bg-one"></div>
    </div><!-- home-slider -->
    <!-- Clients Section -->
    <div class="js-clients clients">
        <div class="clients-item">
            <img class="clients-image" src="{{ asset('/images/partners/img1.png') }}" alt="Image Description">
        </div>
        <div class="clients-item">
            <img class="clients-image" src="{{ asset('/images/partners/img2.png') }}" alt="Image Description">
        </div>
        <div class="clients-item">
            <img class="clients-image" src="{{ asset('/images/partners/img3.png') }}" alt="Image Description">
        </div>
        <div class="clients-item">
            <img class="clients-image" src="{{ asset('/images/partners/img4.png') }}" alt="Image Description">
        </div>
        <div class="clients-item">
            <img class="clients-image" src="{{ asset('/images/partners/img5.png') }}" alt="Image Description">
        </div>
        <div class="clients-item">
            <img class="clients-image" src="{{ asset('/images/partners/img6.png') }}" alt="Image Description">
        </div>
        <div class="clients-item">
            <img class="clients-image" src="{{ asset('/images/partners/img7.png') }}" alt="Image Description">
        </div>
        <div class="clients-item">
            <img class="clients-image" src="{{ asset('/images/partners/img8.png') }}" alt="Image Description">
        </div>
    </div>
    <!-- End Clients Section -->

    <!-- Why We? -->
    <div class="content-space">
        <div class="container">
            <header class="text-center w-md-50 mx-auto mb-8">
                <h2 class="h1">Why We?</h2>
                <p class="h5">Stream <strong>creative</strong> technology company providing key digital services for
                    everyone.</p>
            </header>

            <!-- Row -->
            <div class="row text-center">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="display-4 text-primary mb-2">
                        <i class="fab fa-grav"></i>
                    </div>
                    <h4 class="h5">Creative ideas</h4>
                    <p>CurabiturAchieve virtually any look and layout from within the one template.</p>
                    <a href="#!">
                        Learn More <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="display-4 text-primary mb-2">
                        <i class="fab fa-connectdevelop"></i>
                    </div>
                    <h4 class="h5">Excellent features</h4>
                    <p>We strive to figure out ways to help your audience grow through all platforms.</p>
                    <a href="#!">
                        Learn More <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="display-4 text-primary mb-2">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h4 class="h5">Fully responsive</h4>
                    <p>Find what you need in one template and combine features at will.</p>
                    <a href="#!">
                        Learn More <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
    <!-- End Why We? -->

    <!-- Stats -->
    <div class="bg-primary py-5 position-relative u-hero-img u-overlay u-overlay--dark">
        <div class="container u-overlay__inner pt-8">
            <div class="row text-center text-uppercase text-white">
                <div class="col-lg-3 col-sm-6 pb-8">
                    <h5 class="js-counter display-4 mb-1 text-white">94</h5>
                    <small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Apps</small>
                </div>

                <div class="col-lg-3 col-sm-6 pb-8">
                    <h5 class="js-counter display-4 mb-1 text-white">102</h5>
                    <small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Plugins</small>
                </div>

                <div class="col-lg-3 col-sm-6 pb-8">
                    <h5 class="js-counter display-4 mb-1 text-white">1024</h5>
                    <small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Templates</small>
                </div>

                <div class="col-lg-3 col-sm-6 pb-8">
                    <h5 class="js-counter display-4 mb-1 text-white">5750</h5>
                    <small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Happy Subscriptions</small>
                </div>
            </div>
        </div>
    </div>
    <!-- End Stats -->
    <!-- Testimonials -->
    <div class="content-space">
        <div class="container">
            <!-- Testimonials: Header -->
            <header class="text-center w-md-50 mx-auto mb-8">
                <h2 class="h1">Testimonials</h2>
                <p class="h5">Do not take our words, check out what people say about Stream - UI Kit!</p>
            </header>
            <!-- End Testimonials: Header -->

            <div class="row">
                <div class="col-lg-6 mb-7 mb-lg-0 px-lg-5">
                    <!-- Testimonial -->
                    <blockquote class="blockquote rounded mb-5">Dear Htmlstream team, I just bought the Stream
                        template some weeks ago. The template is really nice and offers quite a large set of options.
                    </blockquote>
                    <div class="media u-font-size-90">
                        <img
                            class="d-flex align-self-center rounded-circle u-blockquote-v2__image u-box-shadow-lg mx-3 mt-2"
                            src="{{ asset('/images/clients/img2.jpg') }}" alt="Image description">
                        <div class="media-body align-self-center">
                            <strong class="d-block">Jane Moris</strong>
                            <span class="u-font-size-75 text-dark">Web Developer</span>
                        </div>
                    </div>
                    <!-- End Testimonial -->
                </div>

                <div class="col-lg-6 px-lg-5">
                    <!-- Testimonial -->
                    <blockquote class="blockquote rounded mb-5">Hi there purchased a few days ago and the site
                        looks great, they gave me some great help with some fiddly setup issues.
                    </blockquote>
                    <div class="media u-font-size-90">
                        <img
                            class="d-flex align-self-center rounded-circle u-blockquote-v2__image u-box-shadow-lg mx-3 mt-2"
                            src="{{ asset('/images/clients/img3.jpg') }}" alt="Image description">
                        <div class="media-body align-self-center">
                            <strong class="d-block">Bastien Rojanawisut</strong>
                            <span class="u-font-size-75 text-dark">UX/UI Designer</span>
                        </div>
                    </div>
                    <!-- End Testimonial -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
@endsection

@push('script')
    <script src="{{ asset('/vendor/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('/vendor/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>
@endpush

@push('js')
    <script>
        $(document).ready(function () {
            //carousal
            $('.js-clients').slick({
                autoplay: true,
                speed: 500,
                slidesToShow: 6,
                infinite: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]
            });
            //counter
            $('.js-counter').counterUp();
        });
    </script>
@endpush
