@extends('view::layouts.web.site.master')

@push('css')
    {!!  Html::style('css/pages/auth.css') !!}
@endpush

@section('content')
    <div class="content content-fixed content-auth-alt">
        <div class="container ht-100p tx-center">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-6 col-md-4 col-lg-3 d-flex flex-column">
                    <div class="tx-100 lh-1"><i class="icon ion-ios-bicycle"></i></div>
                    <h3 class="mg-b-25">Personal</h3>
                    <p class="tx-color-03 mg-b-25">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum.</p>
                    <h1 class="tx-rubik tx-normal mg-b-30 mg-t-auto">$19.00</h1>
                    <button class="btn btn-primary btn-block">Choose Plan</button>
                </div><!-- col -->
                <div class="col-10 col-sm-6 col-md-4 col-lg-3 mg-t-40 mg-sm-t-0 d-flex flex-column">
                    <div class="tx-100 lh-1"><i class="icon ion-ios-car"></i></div>
                    <h3 class="mg-b-25">Team</h3>
                    <p class="tx-color-03 mg-b-25">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                    <h1 class="tx-rubik tx-normal mg-b-30 mg-t-auto">$99.00</h1>
                    <button class="btn btn-primary btn-block">Choose Plan</button>
                </div><!-- col -->
                <div class="col-10 col-sm-6 col-md-4 col-lg-3 mg-t-40 mg-md-t-0 d-flex flex-column">
                    <div class="tx-100 lh-1"><i class="icon ion-ios-boat"></i></div>
                    <h3 class="mg-b-25">Corporate</h3>
                    <p class="tx-color-03 mg-b-25">Nemo enim ipsam volu ptatem quia voluptas sit asp ernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione.</p>
                    <h1 class="tx-rubik tx-normal mg-b-30 mg-t-auto">$199.00</h1>
                    <button class="btn btn-primary btn-block">Choose Plan</button>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- content -->
@endsection

@section('script')

@endsection

@section('js')

@endsection
