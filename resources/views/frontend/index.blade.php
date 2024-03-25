@extends('frontend.site.app')

@section('content')
    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                    <div class="bg-img valign " data-background="https://www.swaralaqar.com/images//slider/2021021724238694479.png" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1>امتلك منزل المستقبل</h1>
                                        <p><p>انعم بلحظات جيدة مع عائلتك .. فى أكثر المنازل أبداعاً</p>
                                        <a href="about.html" class="btn-curve btn-lit mt-30">
                                            <span>اقرأ المزيد</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="swiper-slide">
                    <div class="bg-img valign " data-background="https://www.swaralaqar.com/images//slider/20210217125809456687.png" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1>خدماتنا العقارية</h1>
                                        <p><p>شركة سحب  أكبر مطور عقارى بالمملكة .. نحن جزء من مشروعك العقارى</p>
                                        <a href="services.html" class="btn-curve btn-lit mt-30">
                                            <span>اقرأ المزيد</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    </header>
    <div class="main-content">
        <div class="clients_section bg-shape-image-position">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
                        <div class="section-title">
                            <h5>أهم و أبرز العملاء لدينا...</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-logo">
                            <div class="slic-item">
                                @foreach($clients as $client)
                                <div class="item">
                                    <div class="client_box">
                                        <img class="lazy" src="{{$client->logo}}" alt="brand">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-shape-image">
                
            </div>
        </div>
        <div class="about section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5">
                        <div class="img-mons">
                            <div class="row">
                                <div class="col-md-5 cmd-padding valign">
                                                                        <div class="img1 wow imago" data-wow-delay=".5s">
                                        <img class="lazy" src="{{asset('assets/img/2021021772033854812.jpg')}}" alt="">
                                    </div>
                                                                    </div>
                                <div class="col-md-7 cmd-padding">
                                                                        <div class="img2 wow imago" data-wow-delay="&quot;.3s&quot;">
                                        <img class="lazy" src="{{asset('assets/img/2021021772034163393.jpg')}}">
                                    </div>
                                                                        <div class="img3 wow imago" data-wow-delay="&quot;.8s&quot;">
                                        <img class="lazy" src="{{asset('assets/img/2021021772033996794.jpg')}}">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 valign">
                        <div class="content">
                           
                            <h3 class="main-title wow">  <br> <span class="main-color"> شركة سحب للتطوير العقاري </span> </h3>
                            <p class="wow txt"><p><span style="color: #000000;"></span>
                            
                                مكتب سحب تأسس عام ( 1432هـ ) ويمارس الأنشطة العقارية تاجير بيع إدارة املاك. 
                                سابقة الأعمال
                                تدير المؤسسة عقارت من جميع الأنشطة حيث على الصعيد الصناعي ندير بمدينة الخبر  اكثر من 50 مستوع وعدد ثلاث محطات للخدمات البترولية وعلى صعيد العقارات التجارية يقع تحت إدارة المكتب برج اداري على طريق خادم الحرمين يشتمل على (35) مكتب وعدد (10) معارض وبرج سكني ومعارض ومجمعات سكنية ((كمباوند)) وعلى الصعيد السكني يدير المكتب اكثر من 10 عمائر سكنية بمدينة الخبر 
                            </p>
                        <p>&nbsp;</p>
                            <div class="ftbox mt-30">
                                <ul>
                                    
                                    <li class="  wow fadeIn" data-wow-delay=".3s">
                                        <a target="_blank" href="">
                                            <span class="icon flaticon-construction"></span>
                                            <h6 class="custom-font">الإنشاء والتعمير</h6>
                                        </a>
                                    </li>
                                    
                                    <li class=" space wow fadeIn" data-wow-delay=".3s">
                                        <a target="_blank" href="">
                                            <span class="icon flaticon-building-2"></span>
                                            <h6 class="custom-font">الخدمات العقارية</h6>
                                        </a>
                                    </li>
                                    
                                    <li class="  wow fadeIn" data-wow-delay=".3s">
                                        <a target="_blank" href="">
                                            <span class="icon flaticon-cleaner-1"></span>
                                            <h6 class="custom-font">أعمال خدمات الصيانة</h6>
                                        </a>
                                    </li>
                                                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
@endsection