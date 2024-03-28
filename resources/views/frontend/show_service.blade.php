@extends('frontend.site.app')

@section('content')
    <header class="pages-header bg-img valign parallaxie" data-background="https://www.swaralaqar.com/images//services/2021022134747801809.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>{{$info->name}}</h1>
                        <div class="path">
                            <a href="{{route('index')}}">الرئيسية</a><span>/</span><a href="#0" class="active"> {{$info->name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h6 class="ht-tittle aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">خدمتنا</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate">{{$info->name}}</h2>
                        <p data-aos="fade-up" data-aos-duration="2500" class="aos-init aos-animate">  <p><span style="color: #000000;">{{$info->description}}</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-inner-img">
                        <img class="lazy" src="{{$info->image}}" alt="بيع وشراء العقارات" data-aos="fade-left" data-aos-duration="2000" class="aos-init aos-animate">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection