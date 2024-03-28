<footer class="footer-half sub-bg section-padding pb-0 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="cont">
                    <div class="logo">
                        <a href="index.html">
                            <img class="lazy" src="{{$setting->logo}}" alt="شركة سحب للتطوير العقاري" style="width:100px;height:100px;">
                        </a>
                    </div>
                    <div class="con-info custom-font">
                        <ul>
                                                                <li><span>البريد الألكتروني : </span> {{$setting->email}}</li>
                                                                                                <li><span>العنوان : </span>المملكة العربيه السعوديه</li>
                                                                                                <li style="direction: ltr;">
                                  
                           <a href="tel:0535188889"> {{$setting->phone}}</a>
                                     <span>:الهاتف  </span></li>
                                                             
                        </ul>
                    </div>
                    <div class="social-icon">
                        <h6 class="custom-font stit simple-btn">تابعنا من خلال</h6>
                        <div class="social">
                                <a href="{{$setting->facebook}}" target="_blank" class="icon"><i class="fab fa-facebook-f"></i></a>                                 <a href="https://twitter.com/" target="_blank" class="icon"><i class="fab fa-twitter"></i></a>                                  <a href="https://www.instagram.com//" target="_blank" class="icon"><i class="fab fa-instagram "></i></a>                                 <a href="https://www.snapchat.com/add/" target="_blank" class="icon"><i class="fab fa-snapchat"></i></a>                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <div class="row links_footer">
                    <div class="col-md-6">
                        <h3 class="custom-font stit fz-20 simple-btn">خدماتنا</h3>
                        
                        <ul>
                            @foreach($services as $service)
                                <li><a href="{{route('show_service',$service->id)}}">{{$service->name}}</a> </li>
                            @endforeach                            
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3 class="custom-font stit fz-20 simple-btn">روابط سريعة</h3>
                        <ul>
                            <li><a href="{{route('index')}}">الرئيسية</a></li>
                            <li><a href="{{route('about')}}">من نحن</a></li>
                            <li><a href="{{route('services')}}">خدماتنا</a></li>
                            <li><a href="{{route('projects')}}">مشاريعنا</a></li>
                            <li><a href="{{route('contacts')}}">تواصل معنا</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights text-center">
     <p>© 2024, جميع الحقوق محفوظة، تصميم و تطوير بواسطة <a href="https://wmc-ksa.com/home/index.php">النافذة للتسويق الرقمي</a>
     .</p>        </div>
    </div>
</footer>