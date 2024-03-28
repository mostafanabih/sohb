@extends('frontend.site.app')

@section('content')
    <header class="pages-header bg-img valign parallaxie" data-background="https://www.swaralaqar.com/images//projects/202102213473122718.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1> خدماتنا</h1>
                        <div class="path">
                            <a href="{{route('index')}}">الرئيسية</a><span>/</span><a href="#0" class="active">  خدماتنا </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="services section-padding ">
        <div class="container">
            <div class="services-title custom-font tr-head">
                <h6 class="ht-tittle aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">باقة متنوعة من</h6>
                <h3 data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate"> خدماتنا.</h3>
            </div>
            <div class="row mt-50 services-nth">
                @foreach($services as $service)
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="2500" class="aos-init aos-animate">
                    <div class="step-item ">
                        <!-- <span class="icon flaticon-maid"></span> -->
                        <img src="{{$service->icone}}" style="width:70px;height:70px;">
                        <h6>  {{$service->name}}
                        </h6>
                        <p> <p><span style="color: #000000;">{{$service->description}}</span></p>
                        <div class="stage">
                            <!-- <a href="services/%D8%A8%D9%8A%D8%B9-%D9%88%D8%B4%D8%B1%D8%A7%D8%A1-%D8%A7%D9%84%D8%B9%D9%82%D8%A7%D8%B1%D8%A7%D8%AA.html"><i class="fas fa-chevron-left"></i>اقراء المزيد</a> -->
                        </div>
                    </div>
                </div>
                   @endforeach             
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <ul class="pagination">
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>


    @endsection