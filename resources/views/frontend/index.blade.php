@extends('frontend.include.app')
@section('content')
<div class="row">
    <div class="col-xl-5 col-lg-6">
      <div class="content">
        <div>
          <h1 class="wow fadeIn">Find out how much weight you can lose with Keto diet  </h1>

          <div class="btn-grp mt-4"><a class="btn btn-pill btn-primary btn-air-primary btn-lg me-3 wow pulse" href="{{ route('make.combination') }}"> <img src="{{asset("public/backend/custom/kk.jpg")}}" alt="">Get Start</a></div>
        </div>
      </div>
    </div>
    <div class="col-xl-7 col-lg-6">
      <div class="wow fadeIn"><img class="screen1" height="100%" width="100%" src="{{asset("public/backend/assets/images/landing/keto_sc1.jpg")}}" alt=""></div>
      <div class="wow fadeIn"><img class="screen2" height="100%" width="100%" src="{{asset("public/backend/assets/images/landing/keto_sc2.jpg")}}" alt=""></div>
    </div>
</div>
@endsection
