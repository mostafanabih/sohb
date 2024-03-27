@extends('frontend.site.app')

@section('content')
    <header class="pages-header bg-img valign parallaxie" data-background="https://www.swaralaqar.com/images//contact/2021022134805779614.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>تواصل معنا</h1>
                        <div class="path">
                            <a href="index.html">الرئيسية</a><span>/</span><a href="#0" class="active"> تواصل معنا </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="mextreo-hero inner mar-bot-140">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h6 class="ht-tittle aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">التطوير العالمي </h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate"> دائماً معك</h2>
                        <p data-aos="fade-up" data-aos-duration="2500" class="aos-init aos-animate"><p><span style="color: #000000;">يمكنك التواصل مع التطوير العالمي  وأرسال كافة استفساراتك من خلال النموذج الموضح وسوف يتم الرد فى أقرب وقت</span></p>
                        <div class="mextreo-contact aos-init" data-aos="fade-up" data-aos-duration="3000">
                            <div class="flash_messages" style="width: 100%;">
    
    
    
    
</div>                          
                              <form action="{{route('contact_us')}}" method="post">
                                  @csrf
                                    <input type="text" class="form-control m-input" name="name" id="name" placeholder="اسمك *" required>
                                </div>
                                <div class="form-group mcfg">
                                    <input type="text" class="form-control m-input" name="email" id="email" placeholder="بريدك الالكتروني *" required>
                                </div>

                                <div class="form-group mcfg">
                                    <textarea rows="4" class="form-control m-input" name="message" id="msg" placeholder="رسالة *" required></textarea>
                                </div>
                                <button type="submit" id="submit" class="m-submit">أرسل رسالة</button>
                                <div class="col-md-12 text-center">
                                    <div class="cf-msg" style="display: none;"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-inner-img">
                        <img class="lazy" src="images/contact/2021021774602205875.jpg" alt="" data-aos="fade-left" data-aos-duration="2000" class="aos-init aos-animate">
                    </div>
                    <div class="contact-details aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                        <img src="assets/img/logo-contact.png" alt="">
                        <div class="single-info">
                            <h5>عنوان:</h5>
                            <p>المملكة العربيه السعوديه</p>
                        </div>
                        <div class="single-info">
                            <h5>هاتف:</h5>
                          <p style="direction: ltr;">  
                           <a href="tel:0535188889"> 0557987999</a>/
                           <a href="tel:9200001897"> 0557987999</a>/
                           <a href="tel:0112002856">0557987999</a>
                          </p>
                        </div>
                        <div class="single-info">
                            <h5>البريد الإلكتروني:</h5>
                            <p>info@mail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection