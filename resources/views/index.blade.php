

<x-layout>

    <!-- ---------------------------------------- -->
    <!-- Second Section Categories  -->
    <!-- ---------------------------------------- -->
    <section class="category-section pt-110 pb-110 mb-110">
        <div class="container position-relative">
            
            <x-headingTitle title='إستعراض حسب التصنيف' description="" />

            
            <div class="row">
                <div class="col-12">
                    <div class="swiper category1-slider" style="width: 100%;">
                        <div class="swiper-wrapper">
                            {{-- @foreach ($categories as $category) --}}
                            <x-categoryItem  categoryName="why1" categoryImage="images/auction/act2.png" />
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right And Left Arrow  -->
            <!-- ---------------------------------------- -->
            <div class="slider-arrows text-center d-lg-flex d-none  justify-content-end">
                <div class="category-prev1 swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide"> <i class='bx bx-chevron-left'></i> </div>
                <div class="category-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide"> <i class='bx bx-chevron-right'></i></div>
            </div>
        </div>
    </section>
    <!-- EndSecond Section Categories  -->
    <!-- ---------------------------------------- -->


    <!-- ---------------------------------------- -->
    <!-- Third Section Live Auction  -->
    <!-- ---------------------------------------- -->
    <section class="live-auction pb-110">
        <div class="container">
            <!-- ---------------------------------------- -->
            <!-- Introduction Section  -->
            {{-- <x-heading-title :title ="المزادات الجارية" :description ="إستعرض في أفضل مزاد عن مزادات المنتجات. نريد أن نكون جزء من إبتسامتك ,نجاحك و منمو مستقبلك"/> --}}
            
            <x-headingTitle  title='المزادات الجارية' description="إستعرض في أفضل مزاد عن مزادات المنتجات. نريد أن نكون جزء من إبتسامتك ,نجاحك و منمو مستقبلك" />


            <!-- ---------------------------------------- -->
            <!-- Auctions  -->
            <div class="row gy-4 mb-50 d-flex justify-content-center">
                <!-- First Live Auction Item  -->
                <!-- ---------------------------------------- -->
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div data-wow-duration="0.5s" data-wow-delay="0.2s" class="eg-card auction-card1 hover-shine wow fadeInDown">
                        <div class="auction-img">
                            <img src="{{url('images/auction/act1.png')}}" alt="">
                            <div class="auction-timer2 gap-3" id="timer7">
                                <div class="countdown-single">
                                    <h5 id="days7">7</h5>
                                    <span>أيام</span>
                                </div>
                                <div class="countdown-single">
                                    <h5 id="hours7">05</h5>
                                    <span>ساعات</span>
                                </div>
                                <div class="countdown-single">
                                    <h5 id="minutes7">56</h5>
                                    <span>دقائق</span>
                                </div>
                                <div class="countdown-single">
                                    <h5 id="seconds7">08</h5>
                                    <span>ثواني</span>
                                </div>
                            </div>

                        </div>
                        <div class="auction-content">
                            <h5><a href="auction-details.html"> نعم هو هكذا تفاصيل نعم هو هكذا تفاصيل نعم هو هكذا تفاصيل نعم هو هكذا تفاصيل</a></h5>
                            <p>السعر الحالي : 1.569 ETH</p>
                            <div class="السعر">$ 3,459.32</div>
                            <div class="auction-card-bttm">
                                <a href="auction-details.html" class="eg-btn btn--outline">زايد</a>
                                <div class="share-area">
                                    <ul class="social-icons d-flex">
                                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                    </ul>
                                    <div>
                                        <a href="#" class="share-btn"><i class='bx bxs-share-alt'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Live Auction Item  -->
                <!-- ---------------------------------------- -->
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div data-wow-duration="0.5s" data-wow-delay="0.4s" class="eg-card auction-card1 hover-shine wow fadeInDown">
                        <div class="auction-img">
                            <img src="assets/images/auction/act2.png" alt="">
                            <div class="auction-timer">
                                <div class="countdown" id="timer2">
                                    <h4><span id="hours2">05</span>س : <span id="minutes2">52</span>د : <span id="seconds2">32</span>ث</h4>
                                </div>
                            </div>
                        </div>
                        <div class="auction-content">
                            <h5><a href="auction-details.html">نعم هو هكذا تفاصيل نعم هو هكذا تفاصيل نعم هو هكذا تفاصيل نعم هو هكذا تفاصيل</a></h5>
                            <p>السعر الحالي : 1.569 ETH</p>
                            <div class="السعر">$ 3,459.32</div>
                            <div class="auction-card-bttm">
                                <a href="auction-details.html" class="eg-btn btn--outline">زايد</a>
                                <div class="share-area">
                                    <ul class="social-icons d-flex">
                                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                    </ul>
                                    <div>
                                        <a href="#" class="share-btn"><i class='bx bxs-share-alt'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third Live Auction Item  -->
                <!-- ---------------------------------------- -->
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div data-wow-duration="0.5s" data-wow-delay="1.2s" class="eg-card auction-card1 hover-shine wow fadeInDown">
                        <div class="auction-img">
                            <img src="{{url('images/auction/act6.png')}}" alt="">
                            <div class="auction-timer">
                                <div class="countdown" id="timer6">
                                    <h4><span id="hours6">05</span>س : <span id="minutes6">52</span>د : <span id="seconds6">32</span>ث</h4>
                                </div>
                            </div>
                        </div>
                        <div class="auction-content">
                            <h5><a href="auction-details.html">نعم هو هكذا تفاصيل نعم هو هكذا تفاصيل نعم هو هكذا تفاصيل نعم هو هكذا تفاصيل</a></h5>
                            <p>السعر الحالي : 1.569 ETH</p>
                            <div class="السعر">$ 3,459.32</div>
                            <div class="auction-card-bttm">
                                <a href="auction-details.html" class="eg-btn btn--outline">زايد</a>
                                <div class="share-area">
                                    <ul class="social-icons d-flex">
                                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                    </ul>
                                    <div>
                                        <a href="#" class="share-btn"><i class='bx bxs-share-alt'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-4 text-center">
                    <a href="live-auction.html" class="eg-btn btn--fill-primary mx-auto">عرض الكل</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Third Section Live Auction  -->
    <!-- ---------------------------------------- -->


    <!-- ---------------------------------------- -->
    <!-- Fourth Section Coming Featured Assets  -->
    <!-- ---------------------------------------- -->

    <section class="coming-feature pt-110 pb-110">
        <div class="container">
            <!-- ---------------------------------------- -->
            <!-- Introduction Section  -->
            

            <x-headingTitle title='مزادات قادمة' 
            description="إستعرض في أفضل مزاد عن مزادات المنتجات. نريد أن نكون جزء من إبتسامتك ,نجاحك و منمو مستقبلك" />



            <div class="row px-2">
                <div class="swiper c-feature-slider1 mb-50">
                    <div class="swiper-wrapper">
                        <!-- First Coming Featured Auction Item  -->
                        <!-- ---------------------------------------- -->

                        <div class="swiper-slide">
                            <div class="eg-card c-feature-card1 hover-shine">
                                <div class="auction-img">
                                    <img src="{{url('images/feature/c-feature1.png')}}" alt="">
                                    <div class="auction-timer2 gap-3" id="timer7">
                                        <div class="countdown-single">
                                            <h5 id="days7">7</h5>
                                            <span>أيام</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="hours7">05</h5>
                                            <span>ساعات</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="minutes7">56</h5>
                                            <span>دقائق</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="seconds7">08</h5>
                                            <span>ثواني</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="c-feature-content">
                                    <div class="c-feature-category">بطاط</div>
                                    <a href="auction-details.html">
                                        <h5>هكذا هو تفاصيل </h5>
                                    </a>
                                    <p>السعر الحالي : 1.569 ETH</p>
                                    <div class="auction-card-bttm">
                                        <a href="auction-details.html" class="eg-btn btn--outline">المزيد</a>
                                        <div class="share-area">
                                            <ul class="social-icons d-flex">
                                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                            </ul>
                                            <div>
                                                <a href="#" class="share-btn"><i class='bx bxs-share-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Second Coming Featured Auction Item  -->
                        <!-- ---------------------------------------- -->
                        <div class="swiper-slide">
                            <div class="eg-card c-feature-card1 hover-shine">
                                <div class="auction-img">
                                    <img src="{{url('images/feature/c-feature2.png')}}" alt="">
                                    <div class="auction-timer2 gap-3" id="timer8">
                                        <div class="countdown-single">
                                            <h5 id="days8">7</h5>
                                            <span>أيام</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="hours8">05</h5>
                                            <span>ساعات</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="minutes8">56</h5>
                                            <span>دقائق</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="seconds8">08</h5>
                                            <span>ثواني</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-feature-content">
                                    <div class="c-feature-category">بصل</div>
                                    <a href="auction-details.html">
                                        <h5>هكذا هو تفاصيل 2</h5>
                                    </a>
                                    <p>السعر الحالي : 1.569 ETH</p>
                                    <div class="auction-card-bttm">
                                        <a href="auction-details.html" class="eg-btn btn--outline">المزيد</a>
                                        <div class="share-area">
                                            <ul class="social-icons d-flex">
                                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                            </ul>
                                            <div>
                                                <a href="#" class="share-btn"><i class='bx bxs-share-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Third Coming Featured Auction Item  -->
                        <!-- ---------------------------------------- -->
                        <div class="swiper-slide">
                            <div class="eg-card c-feature-card1 hover-shine">
                                <div class="auction-img">
                                    <img src="{{url('images/feature/c-feature3.png')}}" alt="">
                                    <div class="auction-timer2 gap-3" id="timer9">
                                        <div class="countdown-single">
                                            <h5 id="days9">7</h5>
                                            <span>الأيام</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="hours9">05</h5>
                                            <span>الساعات</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="minutes9">56</h5>
                                            <span>الدقائق</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="seconds9">08</h5>
                                            <span>ثواني</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-feature-content">
                                    <div class="c-feature-category">رسم</div>
                                    <a href="auction-details.html">
                                        <h5>هو هكذا تفاصيل</h5>
                                    </a>
                                    <p>السعر الحالي : 1.569 ETH</p>
                                    <div class="auction-card-bttm">
                                        <a href="auction-details.html" class="eg-btn btn--outline">المزيد</a>
                                        <div class="share-area">
                                            <ul class="social-icons d-flex">
                                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                            </ul>
                                            <div>
                                                <a href="#" class="share-btn"><i class='bx bxs-share-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slider-arrows c-feature-arrow text-center d-flex justify-content-start gap-lg-4 gap-3 ">
                    <div class="c-feature-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide"><i class='bx bx-chevron-right'></i></div>
                    <div class="c-feature-prev1 swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide"><i class='bx bx-chevron-left'></i></div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-4 text-center">
                    <a href="live-auction.html" class="eg-btn btn--fill-white mx-auto">عرض الكل</a>
                </div>
            </div>
        </div>
    </section>

    <!-- End Fourth Section Coming Featured Assets  -->
    <!-- ---------------------------------------- -->



    <!-- ---------------------------------------- -->
    <!-- Fifth Section Hot Collection  -->
    <!-- ---------------------------------------- -->
    <section class="top-author-section pt-110 pb-110">
        <div class="container">
            <!-- ---------------------------------------- -->
            <!-- Introduction Section  -->

            <x-headingTitle title='مقدمي العروض' description="إستعرض في أفضل مزاد عن مزادات المنتجات. نريد أن نكون جزء من إبتسامتك ,نجاحك و منمو مستقبلك" />



            <div class="row gy-4 mb-50 d-flex justify-content-center">
                <!-- First Section Hot Collection  -->
                <!-- ---------------------------------------- -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 ">
                    <div data-wow-duration="0.5s" data-wow-delay="0.4s" class="eg-card author-card1 wow fadeInDown">
                        <div class="author-img">
                            <img src="{{url('images/author/t-author2.png')}}" alt="">
                        </div>
                        <div class="author-content">
                            <div class="t-author">
                                <img src="{{url('images/feature/fa6.png')}}" alt="">
                                <h5><a href="author-details.html">رشيد الوصابي</a></h5>
                                <span>@ٌrush</span>
                            </div>
                            <div class="t-author-buttons">
                                <a href="author-details.html" class="top-author-btn">تفاصيل</a>
                                <a href="#" class="follow-btn">متابعة</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Section Hot Collection  -->
                <!-- ---------------------------------------- -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 ">
                    <div data-wow-duration="0.5s" data-wow-delay="0.6s" class="eg-card author-card1 wow fadeInDown">
                        <div class="author-img">
                            <img src="{{url('images/author/t-author3.png')}}" alt="">
                        </div>
                        <div class="author-content">
                            <div class="t-author">
                                <img src="{{url('images/feature/fa6.png')}}" alt="">
                                <h5><a href="author-details.html">محمد الحسني</a></h5>
                                <span>@Mohadhasani</span>
                            </div>
                            <div class="t-author-buttons">
                                <a href="author-details.html" class="top-author-btn">تفاصيل</a>
                                <a href="#" class="follow-btn">متابعة</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Section Hot Collection  -->
                <!-- ---------------------------------------- -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 ">
                    <div data-wow-duration="0.5s" data-wow-delay="0.8s" class="eg-card author-card1 wow fadeInDown">
                        <div class="author-img">
                            <img src="{{url('images/author/t-author4.png')}}" alt="">
                        </div>
                        <div class="author-content">
                            <div class="t-author">
                                <img src="{{url('images/feature/fa6.png')}}" alt="">
                                <h5><a href="author-details.html">جمال القاشي</a></h5>
                                <span>@thebuetyofjadge</span>
                            </div>
                            <div class="t-author-buttons">
                                <a href="author-details.html" class="top-author-btn">تفاصيل</a>
                                <a href="#" class="follow-btn">متابعة</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fourth Section Hot Collection  -->
                <!-- ---------------------------------------- -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 ">
                    <div data-wow-duration="0.5s" data-wow-delay="1s" class="eg-card author-card1 wow fadeInDown">
                        <div class="author-img">
                            <img src="{{url('images/author/t-author5.png')}}" alt="">
                        </div>
                        <div class="author-content">
                            <div class="t-author">
                                <img src="{{url('images/feature/fa6.png')}}" alt="">
                                <h5><a href="author-details.html">ابوبكر وهاس</a></h5>
                                <span>@wahas</span>
                            </div>
                            <div class="t-author-buttons">
                                <a href="author-details.html" class="top-author-btn">تفاصيل</a>
                                <a href="#" class="follow-btn">متابعة</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 text-center">
                    <a href="top-author.html" class="eg-btn btn--fill-primary mx-auto">عرض الكل</a>
                </div>
            </div>
        </div>
    </section>
    <!--  End Fifth Section Hot Collection  -->
    <!-- ---------------------------------------- -->


    
</x-layout>