<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/naftrend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2022 14:23:30 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة مزاد - {{$heading}}</title>
    <link rel="stylesheet" href="{{url('css/all.css')}}">

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{url('css/bootstrap-icons.css')}}">

    <link rel="stylesheet" href="{{url('css/boxicons.min.css')}}">

    <link rel="stylesheet" href="{{url('css/fontawesome.min.css')}}">

    <link rel="stylesheet" href="{{url('css/swiper-bundle.css')}}">

    <link rel="stylesheet" href="{{url('css/nice-select.css')}}">

    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('css/animate.css')}}">

    <link rel="stylesheet" href="{{url('css/style.css')}}">

    {{-- javascript Files --}}
    @livewireStyles
    
</head>

<body dir="rtl">
    {{-- <x-spinnerAnimation/> --}}

    <div class="scroll-btn">
        <i class='bx bxs-up-arrow-circle'></i>
    </div>

    <!-- ---------------------------------------- -->
    <!-- ٍSearch -->
    <!-- ---------------------------------------- -->
    {{-- <x-search/> --}}


    <!-- ---------------------------------------- -->
    <!-- Side Contact  -->
    <!-- ---------------------------------------- -->
    <x-header-components.side-contact-menu/>


    <header id="navbar">
        <div class="container-fluid">
            <div class="header-area">

                <div class="header-icons d-flex align-items-center">
                    <div class="sidebar-menu-icon d-lg-block d-none">
                        <i class='bx bx-menu'></i>
                    </div> 
                    <div class="search-icon search-btn d-lg-block d-none">
                        <i class='bx bx-search-alt-2'></i>
                    </div>
                    <div class="mobile-menu-btn d-lg-none d-block">
                        <i class='bx bx-menu'></i>
                    </div> 
                </div>

                <div class="main-menu">
                    
                    <div class="mobile-logo-area d-lg-none d-block">
                        <div class="mobile-logo-wrap d-flex justify-content-between align-items-center">
                            <img src="{{asset('storage/images/auction/act1.png')}}" alt="">
                            <img src="{{asset('storage/images/bg/h-logo.png')}}" alt="">
                            <div class="menu-close-btn">
                                <i class="bi bi-x-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- ---------------------------------------- -->
                    <!-- Navigation Animation -->
                    <!-- ---------------------------------------- -->
                    <ul class="menu-list">
                        
                        <li class="menu-item"><a href="{{URL::full() == 'http://127.0.0.1:8000' ? '#' : "/"}}" class="menu-link drop-down">الرئيسية</i></a></li>
                        <!-- <li class="menu-item"><a href="about.html" class="menu-link">حول</a></li> -->
                        <li class="menu-item">
                            <a href="#" class="menu-link drop-down">مزادات<i class='bx bx-chevron-down dropdown-icon'></i></a>
                            <ul class="submenu">
                                <li class="sub-item"><a href="#live-auction">مزادات جارية</a></li>
                                <li class="sub-item"><a href="#coming-features">مزادات قادمة</a></li>

                            </ul>
                        </li>
                        <!-- <li class="menu-item"><a href="faq.html" class="menu-link">الأسئلة الشائعة</a></li> -->
                        <li class="menu-item"><a href="contact" class="menu-link">تواصل معنا</a></li>

                        @auth
                            <li class="menu-item">
                                <a href="#" class="menu-link drop-down"> مرحباً {{auth()->user()->name}} <i class='bi bi-person-circle person-icon'></i></a>
                            </li>

                            <li class="menu-item">
                                <a href="/admin" class=" menu-link hover:text-laravel">
                                    <i class="fa-solid fa-gear"></i>إدارة المزادات
                                </a>                            
                            </li>

                            <li class="menu-item" onClick="routeLogout(event)">
                                <a class="menu-link"> تسجيل الخروج <i class="fa fa-door-closed"></i> </a>                      
                            </li>
                        @else
                            {{-- Before Authentcation --}}
                            <li class="menu-item">
                                <a href="#" class="menu-link drop-down"> تسجيل <i class='bi bi-person-circle person-icon'></i></a>
                                <ul class="submenu">
                                    <!-- <li class="sub-item"><a href="top-author.html">top author</a></li>
                                    <li class="sub-item"><a href="author-details.html">author details</a></li> -->
                                    <li class="sub-item"><a href="/signup">إنشاء حساب</a></li>
                                    <li class="sub-item"><a href="/login">تسجيل دخول</a></li>
                                </ul>
                            </li>
                        @endauth
                    </ul>

                    <div class="d-lg-none d-block">
                        <div class="mobile-search-area d-flex justify-content-center">
                            <input type="text" placeholder="Search Here">
                            <div class="search-icon">
                                <i class='bx bx-search-alt-2'></i>
                            </div>
                        </div>
                        <ul class="mobile-social d-flex justify-content-center">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>
                    
                </div>

               
                <div class="header-logo">
                    <a href="/" style="color:white;"><img src="{{asset('storage/images/icons/logo.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </header>

    <!-- ---------------------------------------- -->
    <!-- First Section Header  -->
    <!-- ---------------------------------------- -->
    <section class="banner-section">
        <div class="swiper banner1 banner-section">
            <div class="swiper-wrapper">
                <!-- First Header  -->
                <!-- ---------------------------------------- -->

                <div class="swiper-slide position-relative">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 bg--primary">
                                <div class="banner-content">
                                    <h1>أكتشف, أكبر مزاد</h1>
                                    <p> تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد </p>
                                    <h4>حالياً: 1 مزاد</h4>
                                    <h5>$ 200.32</h5>
                                    <a href="/live-auctions" class="banner-btn">عرض أكثر</a>
                                </div>
                            </div>

                            <div class="col-lg-6 d-lg-block d-none">
                                <div class="banner-video-area d-flex flex-column justify-content-lg-start justify-content-center">
                                    {{-- <div class="banner-timer d-flex flex-row align-items-center justify-content-center">
                                        <h5 style="color: #ae6615"> الوقت المتبقي </h5>
                                        <x-timer :section="8"  />
                                    </div> --}}
                                    <img src="{{asset('storage/images/users/jamal.jpg')}}" class="bg-dot" alt="">
                                    {{-- <div class="video-play">
                                        <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-open video-icon"><i class="bx bx-play"></i></a>
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- <ul class="banner-social-icon">
                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                        <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    </ul> -->
                    <!-- <img src="{{asset('images/banner/left-bttm.vctr.svg')}}" class="left-bttm-vctr" alt="">
                    <img src="{{asset('images/banner/bannr-bottm-right.png')}}" class="right-bttn-vctr" alt=""> -->
                </div>
                <!-- Second Header  -->
                <!-- ---------------------------------------- -->
                <div class="swiper-slide position-relative">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 bg--primary">
                                <div class="banner-content">
                                    <h1>أكتشف, أكبر مزاد</h1>
                                    <p> 2 تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد </p>
                                    <h4>حالياً: 1 مزاد</h4>
                                    <h5>$ 200.32</h5>
                                    <a href="/live-auctions" class="banner-btn">عرض أكثر</a>
                                </div>
                            </div>

                            <div class="col-lg-6 d-lg-block d-none">
                                <div class="banner-video-area d-flex flex-column justify-content-lg-start justify-content-center">
                                    {{-- <div class="banner-timer d-flex flex-row align-items-center justify-content-center">
                                        <h5 style="color: #ae6615"> الوقت المتبقي </h5>
                                        <x-timer :section="8"  />
                                    </div> --}}
                                    <img src="{{asset('storage/images/users/jamal.jpg')}}" class="bg-dot" alt="">
                                    {{-- <div class="video-play">
                                        <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-open video-icon"><i class="bx bx-play"></i></a>
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- <ul class="banner-social-icon">
                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                        <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    </ul> -->
                    <!-- <img src="{{asset('storage/images/banner/left-bttm.vctr.svg')}}" class="left-bttm-vctr" alt="">
                    <img src="{{asset('storage/images/banner/bannr-bottm-right.png')}}" class="right-bttn-vctr" alt=""> -->
                </div>
                <!-- Third Header  -->
                <!-- ---------------------------------------- -->
                <div class="swiper-slide position-relative">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 bg--primary">
                                <div class="banner-content">
                                    <h1>أكتشف, أكبر مزاد</h1>
                                    <p> 3 تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد تفاصيل عن المزاد </p>
                                    <h4>حالياً: 1 مزاد</h4>
                                    <h5>$ 200.32</h5>
                                    <a href="/live-auctions" class="banner-btn">عرض أكثر</a>
                                </div>
                            </div>

                            <div class="col-lg-6 d-lg-block d-none">
                                <div class="banner-video-area d-flex flex-column justify-content-lg-start justify-content-center">
                                    {{-- <div class="banner-timer d-flex flex-row align-items-center justify-content-center">
                                        <h5 style="color: #ae6615"> الوقت المتبقي </h5>
                                        <x-timer :section="8"  />
                                    </div> --}}
                                    <img src="{{asset('storage/images/users/jamal.jpg')}}" class="bg-dot" alt="">
                                    {{-- <div class="video-play">
                                        <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-open video-icon"><i class="bx bx-play"></i></a>
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- <ul class="banner-social-icon">
                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                        <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    </ul> -->
                    <!-- <img src="{{asset('images/banner/left-bttm.vctr.svg')}}" class="left-bttm-vctr" alt="">
                    <img src="{{asset('images/banner/bannr-bottm-right.png')}}" class="right-bttn-vctr" alt=""> -->
                </div>

            </div>
        </div>
        <div class="swiper-pagination d-flex flex-column align-items-center justify-content-center gap-4"></div>
    </section>

    <!-- End First Section Header  -->
    <!-- ---------------------------------------- -->

    <x-flash-message/>  

    <main>
        {{$slot}}
    </main>




    <!-- ---------------------------------------- -->
    <!-- Final Section Footer  -->
    <!-- ---------------------------------------- -->
    
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row footer-top gy-5">
                <div class="col-xl-6">
                    <div class="row gy-5">
                        <div class="col-md-6">
                            <div class="subscribe-area">
                                <h3>أشترك معنا</h3>
                                <p>لنبداء البحث عن مزاد فريد ومحددد حسب إحتياجك. ليس هو الوحيد في العالم</p>
                                <form>
                                    <div class="form-inner">
                                        <input type="text" placeholder="بريدك الإلكتروني">
                                        <button class="subscribe-btn">سجل</button>
                                    </div>
                                </form>
                                <h5>انضم لمجمتع مزاد</h5>
                                <ul class="footer-social d-flex">
                                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-pinterest'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-item">
                                <img src="{{asset('storage/images/bg/footer-logo.png')}}" alt="">
                            </div>
                            <div class="footer-item">
                                <div class="footer-title">
                                    <span></span>
                                    <h5>اتصل للتحدث معنا</h5>
                                </div>
                                <p class="mb-0">+967 771 168 772</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row gy-5">

                        <div class="col-md-4 col-sm-6">
                            <div class="footer-title">
                                <span></span>
                                <h5>مجتمع مزاد</h5>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">مركز المساعة</a></li>
                                <li><a href="#">مشاركات</a></li>
                                <li><a href="#">مقترحات</a></li>
                                <li><a href="#">أخبار مزاد</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-title">
                                <span></span>
                                <h5>مهم</h5>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">الأسئلة الشائعة</a></li>
                                <li><a href="#">سياسة الخصوصية</a></li>
                                <li><a href="#">قوانين وشروط</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex align-items-center">
                <div class="col-lg-6 text-lg-start text-center order-lg-1 order-2">
                    <div class="copyright">
                        حقوق النسخ محفوظة 2022 <a href="#">الحسني</a> | تصميم <a href="#">Egens Lab</a>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end text-center order-lg-2 order-1 mb-lg-0 mb-3">
                    <div class="payment-area">
                        <ul class="pay-list d-flex align-items-center justify-content-lg-end justify-content-center m-0">
                            <li class=" d-md-block d-none"><a href="#">نحن نقبل:</a></li>
                            <li>
                                <a href="#"><img src="{{url('storage/images/bg/f-pay1.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('storage/images/bg/f-pay2.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('storage/images/bg/f-pay3.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('storage/images/bg/f-pay4.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('storage/images/bg/f-pay5.png')}}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    @livewireScripts
</body>

<!-- Mirrored from demo.egenslab.com/html/naftrend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2022 14:23:30 GMT -->
{{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{url('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/fontawesome.min.js')}}"></script>
    <script src="{{url('js/swiper-bundle.js')}}"></script>
    <script src="{{url('js/jquery.nice-select.js')}}"></script>
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/wow.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
    <script src="{{url('js/timer.js')}}"></script>
</html>

