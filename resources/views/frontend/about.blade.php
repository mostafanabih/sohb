@extends('frontend.site.app')

@section('content')
    <header class="pages-header bg-img valign parallaxie"
        data-background="{{asset('assets/img/about.jpeg')}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1> من نحن </h1>
                        <div class="path">
                            <a href="index.html">الرئيسية</a><span>/</span><a href="#0" class="active"> من نحن </a>
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
                        <h6 class="ht-tittle aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">شركة
                              سحب لإدارة الأملاك العقارية المحدودة للتطوير العقارى والمقاولات العامة</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate">حول  مكتب سحب
                             لإدارة الأملاك العقارية</h2>
                        <p data-aos="fade-up" data-aos-duration="2500" class="aos-init aos-animate">
                        <p>
                        نفتخر في مكتب سحب العقاري بتقديم خدمات متميزة تُكللها رؤى واستراتيجيات يدفعها الشغف لتُلبية تفضيلات وأحلام عملائنا بما يلائم احتياجاتهم بأعلى معايير الجودة والمهنية، تأسست سحب العقارية في عام 1432 هـ وأطلقت العديد من المشاريع السكنية التي تجمع بين الأصالة والفخامة والرقي. بفضل الرؤى والاستراتيجيات القائمة على الابتكار والشغف، نجحنا في بناء سمعة رائدة في مجال إدارة وتسويق العقارات، مع التميز في مواجهة التحديات وتحقيق النجاحات المتعددة. 
يتميز فريقنا الهندسي بالاحترافية والخبرة العميقة، ونسعى دائمًا لتكون الخيار الأول لعملائنا، حيث نتطلع إلى تحقيق مزيد من النجاحات وتعزيز الثقة والتواصل المستمر معهم.
                        </p>
                        
                        <h3>هدفنا&nbsp;</h3>
                        <p><span style="color: #000000;">     يسعى مكتب سحب العقاري إلى تحقيق مجموعة من الأهداف الرئيسية التي تسهم في نجاحه ونموه المستدام.
                        </span></p>
                        <ul>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>توفير الخدمات العقارية عالية الجودة والمطابقة للمواصفات البناء القياسية العالمية، الأمر الذي يوطّد المزيد من الثقة بيننا وبين عملائنا.</p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>تحقيق رضا العملاء من خلال تقديم خدمات متميزة، والاستماع إلى احتياجاتهم ومتطلباتهم، وتقديم الحلول الملائمة والمناسبة لهم.</p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>توفير العروض العقارية المتنوعة بما في ذلك بيع وبناء وتأجير العقارات، لتلبية احتياجات العملاء المتنوعة والمختلفة.</p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>تطوير العمليات والخدمات العقارية بشكل مستمر، بهدف تحسين الأداء وتلبية احتياجات العملاء بشكل أفضل.</p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>بناء شراكات استراتيجية، مع العملاء والشركاء في الأسواق العقارية، بهدف تعزيز التعاون وتحقيق النجاح المشترك.</p>
                        </li>
                        
                    </ul>

                        <h3>رؤيتنا&nbsp;</h3>
                        <p><span style="color: #000000;">      مدفوعون دائًما بالشغف والإلهام في تنفيذ وتخطيط كافة مشاريعنا، ونسعى إلى تحقيق رؤية مستقبلية تشمل تحقيق حصة سوية في القطاعات السكنية والتجارية والصناعية، مما يعزز مكانتها الرائدة في سوق العقارات ويسهم في تعزيز التنمية المستدامة للمجتمع.

                        </span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-inner-img">
                        <img src="{{asset('assets/about/2021021765631816262.jpg')}}" alt="" data-aos="fade-left"
                            data-aos-duration="2000" class="aos-init aos-animate lazy">
                        <img src="{{asset('assets/about/2021021764952587099.jpg')}}" alt="" class="hero-inner-2 aos-init lazy"
                            data-aos="fade-up" data-aos-duration="3000">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @endsection