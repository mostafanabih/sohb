@extends('frontend.site.app')

@section('content')
    <header class="pages-header bg-img valign parallaxie" data-background="https://www.swaralaqar.com/images//projects/202102213473122718.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>   مشاريعنا</h1>
                        <div class="path">
                            <a href="{{route('index')}}">الرئيسية</a><span>/</span><a href="#0" class="active">    مشاريعنا </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="project-gallery section-padding">
        <div class="container">
            <div class="services-title custom-font tr-head">
                <h6 class="ht-tittle aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">أحدث المشاريع</h6>
                <h3 data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate"> مشاريعنا</h3>
            </div>

            <div class="row mt-30">
                @foreach($projects as $project)
                <div class="col-md-4">
                    <div class="portfolio-img aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"> <a data-fancybox="gallery" href="images/thumbnail/projects/202102161375162054.jpg">
                    @foreach($project->images as $image)
                            <img  src="@if($loop->first) {{asset("storage/$image")}} @endif"  alt=""><i class="flaticon-add rp-icon"></i></a>
                            @endforeach
                        <div class="sp-text">
                            <h3>{{$project->name}}</h3>
                            <p><p>{{$project->description}}</p>
                            <div class="stage">
                                <a href="{{route('show_project',$project->id)}}"><i class="fas fa-chevron-left"></i>اقراء المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                                
                    <div class="col-lg-12 col-md-12">
                        <ul class="pagination">
                            
                        </ul>
                    </div>
            </div>

        </div>
    </section>

    @endsection