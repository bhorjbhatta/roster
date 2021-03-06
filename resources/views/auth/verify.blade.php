@extends('layouts.auth')

@section('content')
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv"
             style="background-image:url(assets/static/images/bg.jpg)">
            <div class="pos-a centerXY">
                <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px">
                    <img class="pos-a centerXY" src="assets/static/images/logo.png" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px"><h4
                class="fw-300 c-grey-900 mB-40">Login</h4>
            @lang('auth.email_verified', ['email' => $user->email])
        </div>
    </div>
@endsection
