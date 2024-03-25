</head>
<body dir="rtl">
<div id="preloader"></div>
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<nav class="navbar change navbar-expand-lg">
    <div class="container">
        <a class="logo" href="index.html">
            <img class="lazy" src="{{$setting->logo}}" alt="شركة سحب للتطوير العقاري" style="width:100px;height:100px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link active" href="{{route('index')}}">الرئيسية</a></li>
                <li class="nav-item"><a class="nav-link " href="{{route('about')}}">   من نحن </a></li>
                <li class="nav-item"><a class="nav-link " href="{{route('images')}}">    البوم صور </a></li>

                <!-- <li class="nav-item dropdown show">
                    <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"> البوابات لدينا </a>
                    <div class="dropdown-menu">
                        
                        <a class="dropdown-item"  target="_blank">الإنشاء والتعمير </a>
                        
                        <a class="dropdown-item"  target="_blank">الخدمات العقارية </a>
                        
                        <a class="dropdown-item" target="_blank">أعمال خدمات الصيانة </a>
                        
                    </div>
                </li> -->
                <li class="nav-item"><a class="nav-link " href="{{route('services')}}"> خدماتنا</a></li>
                <li class="nav-item"><a class="nav-link " href="{{route('projects')}}"> مشاريعنا</a></li>
                <li class="nav-item"><a class="nav-link " href="{{route('contacts')}}">تواصل معنا</a></li>
                <!-- <li class="nav-item">

                <form action="{{ route('language.change', App::getLocale() === 'en' ? 'ar' : 'en') }}" method="get">
                    <button type="submit" class="nav-link" style="background: none;border: none;">
                        <i class="fa-solid fa-globe"></i>
                        {{ App::getLocale() === 'en' ? 'العربيه' : 'EN' }}
                    </button>
                </form>

                </li> -->


            </ul>
        </div>

    </div>
</nav>