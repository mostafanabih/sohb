@extends('frontend.site.app')

@section('content')
    <header class="pages-header bg-img valign parallaxie" data-background="https://www.swaralaqar.com/images//projects/202102213473122718.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>{{$info->name}}</h1>
                        <div class="path">
                            <a href="{{route('index')}}">الرئيسية</a><span>/</span><a href="#0" class="active"> {{$info->name}} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="mextreo-hero inner mar-bot-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h6 class="ht-tittle aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">حول المشروع</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate"> {{$info->name}}</h2>
                        <p data-aos="fade-up" data-aos-duration="2500" class="aos-init aos-animate"> <p>{{$info->description}}<br>&nbsp;</p>.
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="project slider slider-prlx">
                        <div class="swiper-container parallax-slider">
                            <div class="swiper-wrapper">
                                @foreach($info->images as $image)

                                <div class="swiper-slide">
                                    <div class="bg-img valign portfolio-img aos-animate " data-aos-duration="1500"> <a data-fancybox="gallery" href="../images/projects/2021021613656368981.jpg">
                                            <img src="{{asset("storage/$image")}}" alt=""></a>
                                    </div>
                                </div>
                                  @endforeach  
                            </div>
                            <div class="setone setwo">
                                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination top botm custom-font"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>



    @endsection