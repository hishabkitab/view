@extends('view::layouts.web.site.master')

@push('css')
    {!!  Html::style('css/pages/profile.css') !!}
@endpush

@section('content')
    <div class="content content-fixed bd-b">
        <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                            <li class="breadcrumb-item"><a href="#">Profile</a></li>
                            <li class="breadcrumb-item"><a href="#">Discover</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events</li>
                        </ol>
                    </nav>
                    <h4 class="mg-b-0">Discover Events</h4>
                </div>
                <div class="search-form mg-t-20 mg-sm-t-0">
                    <input type="search" class="form-control" placeholder="Search events">
                    <button class="btn" type="button"><i data-feather="search"></i></button>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- content -->

    <div class="content">
        <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
            <div class="row">
                <div class="col-lg-8 col-xl-9">

                    <div class="row row-sm mg-b-25">
                        <div class="col-md-6">
                            <div class="card card-event">
                                <img src="https://via.placeholder.com/500" class="card-img-top" alt="">
                                <div class="card-body tx-13">
                                    <h5><a href="">Moto Rally Championship</a></h5>
                                    <p class="mg-b-0">Mar 22 - Mar 24, World Trade Center Metro </p>
                                    <span class="tx-12 tx-color-03">Manila, Philippines</span>
                                </div><!-- card-body -->
                                <div class="card-footer tx-13">
                                    <span class="tx-color-03">6,187 people interested</span>
                                    <button class="btn btn-xs btn-secondary">Interested</button>
                                </div><!-- card-footer -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-md-6 mg-t-20 mg-md-t-0">
                            <div class="card card-event">
                                <img src="https://via.placeholder.com/500" class="card-img-top" alt="">
                                <div class="card-body tx-13">
                                    <h5><a href="">Reggae Music Showdown</a></h5>
                                    <p class="mg-b-0">Mar 30 - Mar 31, Cebu Business Park</p>
                                    <span class="tx-12 tx-color-03">Cebu City, Cebu, Philippines</span>
                                </div><!-- card-body -->
                                <div class="card-footer tx-13">
                                    <span class="tx-color-03">5,092 people interested</span>
                                    <button class="btn btn-xs btn-secondary">Interested</button>
                                </div><!-- card-footer -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-md-6 mg-t-20">
                            <div class="card card-event">
                                <img src="https://via.placeholder.com/500x281" class="card-img-top" alt="">
                                <div class="card-body tx-13">
                                    <h5><a href="">Acoustic Workshop</a></h5>
                                    <p class="mg-b-0">Apr 10 - Apr 12, Cebu IT Park</p>
                                    <span class="tx-12 tx-color-03">Cebu City, Cebu, Philippines</span>
                                </div><!-- card-body -->
                                <div class="card-footer tx-13">
                                    <span class="tx-color-03">5,001 people interested</span>
                                    <button class="btn btn-xs btn-secondary">Interested</button>
                                </div><!-- card-footer -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-md-6 mg-t-20">
                            <div class="card card-event">
                                <img src="https://via.placeholder.com/1000x666" class="card-img-top" alt="">
                                <div class="card-body tx-13">
                                    <h5><a href="">Photoshop Effects Workshop</a></h5>
                                    <p class="mg-b-0">Apr 12 - Apr 13, 2nd Fl. Westfield Building</p>
                                    <span class="tx-12 tx-color-03">Bay Area, San Francisco, CA</span>
                                </div><!-- card-body -->
                                <div class="card-footer tx-13">
                                    <span class="tx-color-03">4,343 people interested</span>
                                    <button class="btn btn-xs btn-secondary">Interested</button>
                                </div><!-- card-footer -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-md-6 mg-t-20">
                            <div class="card card-event">
                                <img src="https://via.placeholder.com/640x427" class="card-img-top" alt="">
                                <div class="card-body tx-13">
                                    <h5><a href="">Annual Dog Showdown</a></h5>
                                    <p class="mg-b-0">Apr 15, 8:00am - 05:00pm, Fishermans Wharf</p>
                                    <span class="tx-12 tx-color-03">Bay Area, San Francisco, CA</span>
                                </div><!-- card-body -->
                                <div class="card-footer tx-13">
                                    <span class="tx-color-03">4,343 people interested</span>
                                    <button class="btn btn-xs btn-secondary">Interested</button>
                                </div><!-- card-footer -->
                            </div><!-- card -->
                        </div><!-- col -->
                    </div><!-- row -->

                </div><!-- col -->
                <div class="col-sm-7 col-md-5 col-lg-4 col-xl-3 mg-t-40 mg-lg-t-0">
                    <div class="d-flex align-items-center justify-content-between mg-b-20">
                        <h6 class="tx-uppercase tx-semibold mg-b-0">Upcoming Events</h6>
                    </div>
                    <ul class="list-unstyled media-list mg-b-15">
                        <li class="media align-items-center">
                            <div class="wd-40 ht-40 bg-dark tx-white d-flex align-items-center justify-content-center rounded">
                                <i data-feather="calendar"></i>
                            </div>
                            <div class="media-body pd-l-15">
                                <h6 class="mg-b-2"><a href="" class="link-01">My 32th Birthday</a></h6>
                                <span class="tx-13 tx-color-03">Today, April 21, 5:00pm</span>
                            </div>
                        </li>
                        <li class="media align-items-center mg-t-15">
                            <div class="wd-40 ht-40 bg-indigo tx-white d-flex align-items-center justify-content-center rounded">
                                <i data-feather="calendar"></i>
                            </div>
                            <div class="media-body pd-l-15">
                                <h6 class="mg-b-2"><a href="" class="link-01">Dribbble Meetup</a></h6>
                                <span class="tx-13 tx-color-03">Tomorrow, April 22, 3:00pm</span>
                            </div>
                        </li>
                    </ul>

                    <h6 class="tx-uppercase tx-semibold mg-t-50 mg-b-15">Events By Location</h6>

                    <nav class="nav nav-classic tx-13">
                        <a href="" class="nav-link"><span>Worldwide</span> <span class="badge">20</span></a>
                        <a href="" class="nav-link"><span>Asia Pacific</span> <span class="badge">18</span></a>
                        <a href="" class="nav-link"><span>United States</span> <span class="badge">14</span></a>
                        <a href="" class="nav-link"><span>Europe</span> <span class="badge">12</span></a>
                        <a href="" class="nav-link"><span>Nearby</span> <span class="badge">10</span></a>
                    </nav>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- content -->

@endsection

@section('script')

@endsection

@section('js')

@endsection
