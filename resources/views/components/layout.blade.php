<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/naftrend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2022 14:23:30 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naftrend - NFT Marketplace HTML Template</title>
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
</head>

<body dir="rtl">
    {{-- <x-spinnerAnimation/> --}}

    <div class="scroll-btn">
        <i class='bx bxs-up-arrow-circle'></i>
    </div>

    <!-- ---------------------------------------- -->
    <!-- ٍSearch -->
    <!-- ---------------------------------------- -->
    <x-search/>


    <!-- ---------------------------------------- -->
    <!-- Side Contact  -->
    <!-- ---------------------------------------- -->
    <div class="menu-toggle-btn-full-shape">
        <div class="menu-toggle-wrap bg-white">
            <div class="sidebar-top-area d-flex justify-content-between align-items-center">
                <div class="sidebar-logo">
                    <a href="index-2.html"><img src="{{asset('images/bg/sidebar-logo.png')}}" alt=""></a>
                </div>
                <div class="cross-icon">
                    <i class='bx bx-x'></i>
                </div>
            </div>
            <div class="sidebar-body">
                <h5>Our Social Site</h5>
                <ul class="sidebar-social">
                    <li><a href="#"><i class='bx bxl-facebook'></i><span>facebook.com/egenslab</span></a></li>
                    <li><a href="#"><i class='bx bxl-twitter'></i><span>twitter.com/egenslab/</span></a></li>
                    <li><a href="#"><i class='bx bxl-instagram'></i><span>instagram.com/egenslab/</span></a></li>
                    <li><a href="#"><i class='bx bxl-pinterest-alt'></i><span>pinterest.com/egenslab/</span></a></li>
                </ul>
            </div>
            <div class="sidebar-bottom">
                <p>Need Any Help? Please Mail Us!</p>
                <a href="#"><span><i class='bx bx-envelope'></i> <span class="__cf_email__" data-cfemail="ddb4b3bbb29db8bab8b3aeb1bcbff3beb2b0">[email&#160;protected]</span></span></a>
            </div>
        </div>
        <div class="sidebar-bottom-icon">
            <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_1687_55" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="41">
            <rect width="39.8116" height="41" fill="#C4C4C4" />
            </mask>
            <g mask="url(#mask0_1687_55)">
            <path d="M30.6961 2.43256L1.93437 23.5151C0.104333 24.8566 -0.246827 27.4996 1.15152 29.4073L16.3665 50.1642C17.7648 52.0719 20.391 52.5325 22.221 51.1911L50.9828 30.1085C52.8128 28.7671 53.164 26.1241 51.7657 24.2164L36.5507 3.45945C35.1523 1.55176 32.5262 1.09113 30.6961 2.43256ZM32.3867 4.73888C32.537 4.62871 32.7038 4.55641 32.8761 4.51736L27.8759 28.7454L3.26629 26.2216C3.35545 26.0691 3.47455 25.9317 3.62484 25.8215L32.3867 4.73888ZM49.2922 27.8021L20.5304 48.8847C19.9201 49.3321 19.0453 49.1787 18.5789 48.5424L4.37018 29.1583L28.9084 31.6743C29.2548 31.7094 29.5815 31.6137 29.8397 31.4245C30.0979 31.2352 30.2876 30.9525 30.3582 30.6116L35.3445 6.45391L49.5532 25.8381C50.0195 26.4744 49.9026 27.3547 49.2922 27.8021Z" />
            </g>
            </svg>
        </div> 
    </div> 


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
                    {{-- <div class="mobile-menu-btn d-lg-none d-block">
                        <i class='bx bx-menu'></i>
                    </div>  --}}
                </div>

                <div class="main-menu">
                    
                    {{-- <div class="mobile-logo-area d-lg-none d-block">
                        <div class="mobile-logo-wrap d-flex justify-content-between align-items-center">
                            <img src="{{asset('images/auction/act1.png')}}" alt="">
                            <img src="{{asset('images/bg/h-logo.png')}}" alt="">
                            <div class="menu-close-btn">
                                <i class="bi bi-x-lg"></i>
                            </div>
                        </div>
                    </div> --}}

                    <!-- ---------------------------------------- -->
                    <!-- Navigation Animation -->
                    <!-- ---------------------------------------- -->
                    <ul class="menu-list">
                        <li class="menu-item"><a href="#" class="menu-link drop-down">الرئيسية</i></a></li>
                        <!-- <li class="menu-item"><a href="about.html" class="menu-link">حول</a></li> -->
                        <li class="menu-item">
                            <a href="#" class="menu-link drop-down">مزادات<i class='bx bx-chevron-down dropdown-icon'></i></a>
                            <ul class="submenu">
                                <li class="sub-item"><a href="live-auction.html">مزادات جارية</a></li>
                                <li class="sub-item"><a href="coming-features.html">مزادات قادمة</a></li>

                            </ul>
                        </li>
                        <!-- <li class="menu-item"><a href="faq.html" class="menu-link">الأسئلة الشائعة</a></li> -->
                        <li class="menu-item"><a href="contact.html" class="menu-link">تواصل معنا</a></li>

                        <li class="menu-item">
                            <a href="#" class="menu-link drop-down"> تسجيل <i class='bi bi-person-circle person-icon'></i></a>
                            <ul class="submenu">
                                <!-- <li class="sub-item"><a href="top-author.html">top author</a></li>
                                <li class="sub-item"><a href="author-details.html">author details</a></li> -->
                                <li class="sub-item"><a href="signup.html">إنشاء حساب</a></li>
                                <li class="sub-item"><a href="login.html">تسجيل دخول</a></li>
                            </ul>
                        </li>
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

                <!-- <div class="header-btn d-xl-block d-none">
                    <a href="#">Connect Wallet</a>
                </div> -->
                <div class="header-logo">
                    <a href="index-2.html"><img src="{{asset('images/icons/auction.png')}}" alt=""></a>
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
                                    <a href="auction-details.html" class="banner-btn">عرض أكثر</a>
                                </div>
                            </div>

                            <div class="col-lg-6 d-lg-block d-none">
                                <div class="banner-video-area d-flex flex-column justify-content-lg-start justify-content-center">
                                    <div class="banner-timer d-flex flex-row align-items-center justify-content-center">
                                        <h5> الوقت المتبقي </h5>
                                        <h3 id="countdown-timer-1" style="padding: 0 10px;"></h3>
                                    </div>
                                    <img src="{{asset('images/banner/banner-dot.png')}}" class="bg-dot" alt="">
                                    <img src="{{asset('images/banner/banner-vdobg.png')}}" alt="">
                                    <div class="video-play">
                                        <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-open video-icon"><i class="bx bx-play"></i></a>
                                    </div>
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
                                    <a href="auction-details.html" class="banner-btn">عرض أكثر</a>
                                </div>
                            </div>

                            <div class="col-lg-6 d-lg-block d-none">
                                <div class="banner-video-area d-flex flex-column justify-content-lg-start justify-content-center">
                                    <div class="banner-timer d-flex flex-row align-items-center justify-content-center">
                                        <h5> الوقت المتبقي </h5>
                                        <h3 id="countdown-timer-1" style="padding: 0 10px;"></h3>
                                    </div>
                                    <img src="{{asset('images/banner/banner-dot.png')}}" class="bg-dot" alt="">
                                    <img src="{{asset('images/banner/banner-vdobg.png')}}" alt="">
                                    <div class="video-play">
                                        <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-open video-icon"><i class="bx bx-play"></i></a>
                                    </div>
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
                                    <a href="auction-details.html" class="banner-btn">عرض أكثر</a>
                                </div>
                            </div>

                            <div class="col-lg-6 d-lg-block d-none">
                                <div class="banner-video-area d-flex flex-column justify-content-lg-start justify-content-center">
                                    <div class="banner-timer d-flex flex-row align-items-center justify-content-center">
                                        <h5> الوقت المتبقي </h5>
                                        <h3 id="countdown-timer-1" style="padding: 0 10px;"></h3>
                                    </div>
                                    <img src="{{asset('images/banner/banner-dot.png')}}" class="bg-dot" alt="">
                                    <img src="{{asset('images/banner/banner-vdobg.png')}}" alt="">
                                    <div class="video-play">
                                        <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-open video-icon"><i class="bx bx-play"></i></a>
                                    </div>
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
                                <img src="{{url('images/bg/footer-logo.png')}}" alt="">
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
                                <a href="#"><img src="{{url('images/bg/f-pay1.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('images/bg/f-pay2.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('images/bg/f-pay3.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('images/bg/f-pay4.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('images/bg/f-pay5.png')}}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{url('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/fontawesome.min.js')}}"></script>
    <script src="{{url('js/swiper-bundle.js')}}"></script>
    <script src="{{url('js/jquery.nice-select.js')}}"></script>
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/wow.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
</body>

<!-- Mirrored from demo.egenslab.com/html/naftrend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2022 14:23:30 GMT -->

</html>