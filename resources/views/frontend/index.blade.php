@extends('frontend.site.app')

@section('content')
    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                @foreach($banners as $banner)
                <div class="swiper-slide">
                    <div class="bg-img valign " data-background="{{$banner->image}}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1>{{$banner->name}}</h1>
                                        <p><p>{{$banner->description}}</p>
                                        <a href="about.html" class="btn-curve btn-lit mt-30">
                                            <span>اقرأ المزيد</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </header>
    <div class="main-content">
        
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
                           
                            <h3 class="main-title wow">  <br> <span class="main-color"> مكتب سحب للتطوير العقاري </span> </h3>
                            <p class="wow txt"><p><span style="color: #000000;"></span>
                            
                            نفتخر في مكتب سحب العقاري بتقديم خدمات متميزة تُكللها رؤى واستراتيجيات يدفعها الشغف لتُلبية تفضيلات وأحلام عملائنا بما يلائم احتياجاتهم بأعلى معايير الجودة والمهنية، تأسست سحب العقارية في عام 1432 هـ وأطلقت العديد من المشاريع السكنية التي تجمع بين الأصالة والفخامة والرقي. بفضل الرؤى والاستراتيجيات القائمة على الابتكار والشغف، نجحنا في بناء سمعة رائدة في مجال إدارة وتسويق العقارات، مع التميز في مواجهة التحديات وتحقيق النجاحات المتعددة. 
                         يتميز فريقنا الهندسي بالاحترافية والخبرة العميقة، ونسعى دائمًا لتكون الخيار الأول لعملائنا، حيث نتطلع إلى تحقيق مزيد من النجاحات وتعزيز الثقة والتواصل المستمر معهم.

                            </p>
                        <p>&nbsp;</p>
                            <div class="ftbox mt-30">
                                <ul>
                                    
                                    <li class="  wow fadeIn" data-wow-delay=".3s" style="border-radius:50%">
                                        <a target="_blank" href="">
                                            <span class="icon flaticon-construction"></span>
                                            <h6 class="custom-font"> بناء العقارات</h6>
                                        </a>
                                    </li>
                                    
                                    <li class=" space wow fadeIn" data-wow-delay=".3s" style="border-radius:50%">
                                        <a target="_blank" href="">
                                            <span class="icon flaticon-building-2"></span>
                                            <h6 class="custom-font">بيع العقارات</h6>
                                        </a>
                                    </li>
                                    
                                    <li class="  wow fadeIn" data-wow-delay=".3s" style="border-radius:50%">
                                        <a target="_blank" href="">
                                            <span class="icon flaticon-cleaner-1"></span>
                                            <h6 class="custom-font">تأجير العقارات</h6>
                                        </a>
                                    </li>
                                                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clients_section bg-shape-image-position">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
                        <div class="section-title">
                            <h5> شركاء النجاح...</h5>
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
       
    </div>
@endsection