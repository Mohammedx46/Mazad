<x-layout>
    <!-- ---------------------------------------- -->
    <!-- Second Section ِAuction  -->
    <!-- ---------------------------------------- -->
    <div class="auction-details-section pt-110">
        <div class="container">
            <!-- First Section ِAuction and Bidding -->
            <!-- ---------------------------------------- -->
            <div class="row gy-5 mb-50">
                <div class="col-lg-6 d-flex justify-content-center flex-column">

                    <div class="tab-content mb-4 d-flex justify-content-lg-start justify-content-center">
                        <div class="tab-pane big-image fade show active" id="gallery-img1">
                            <div class="auction-gallery-timer d-flex align-items-center justify-content-center flex-wrap">
                                <h5> الوقت المتبقي </h5>
                            </div>
                            <img src="{{url('images/bg/auction-big1.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="tab-pane big-image fade" id="gallery-img2">
                            <div class="auction-gallery-timer d-flex align-items-center justify-content-start">
                                <h5> الوقت المتبقي </h5>
                            </div>
                            <img src="{{url('images/bg/auction-big2.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="tab-pane big-image fade" id="gallery-img3">
                            <div class="auction-gallery-timer d-flex align-items-center justify-content-start">
                                <h5> الوقت المتبقي   </h5>
                            </div>
                            <img src="{{url('images/bg/auction-big3.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="tab-pane big-image fade show" id="gallery-img4">
                            <div class="auction-gallery-timer d-flex align-items-center justify-content-start">
                                <h5> الوقت المتبقي </h5>
                            </div>
                            <img src="{{url('images/bg/auction-big4.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    
                    <ul class="nav small-image-list d-flex justify-content-lg-start justify-content-center gap-4">
                        <li class="nav-item">
                            <div id="details-img1" data-bs-toggle="pill" data-bs-target="#gallery-img1" aria-controls="gallery-img1">
                                <img src="{{url('images/bg/auction-sm1.png')}} " class="img-fluid" alt="">
                            </div>
                        </li>
                        <li class="nav-item">
                            <div id="details-img2" data-bs-toggle="pill" data-bs-target="#gallery-img2" aria-controls="gallery-img2">
                                <img src="{{url('images/bg/auction-sm2.png')}}" class="img-fluid" alt="">
                            </div>
                        </li>
                        <li class="nav-item">
                            <div id="details-img3" data-bs-toggle="pill" data-bs-target="#gallery-img3" aria-controls="gallery-img3">
                                <img src="{{url('images/bg/auction-sm3.png')}}" class="img-fluid" alt="">
                            </div>
                        </li>
                        <li class="nav-item">
                            <div id="details-img4" data-bs-toggle="pill" data-bs-target="#gallery-img4" aria-controls="gallery-img4">
                                <img src="{{url('images/bg/auction-sm4.png')}}" class="img-fluid" alt="">
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="auction-details-content-area">
                        <!-- Stars Rating  -->
                        <!-- ------------- -->

                        <!-- <div class="product-rating-area">
                            <ul>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><a href="#">(32 مراجعة)</a></li>
                            </ul>
                        </div> -->
                        <div class="product-details-area text-lg-end text-center">
                            <h3>هو هكذا اسم المزاد</h3>
                            <p>هو هكذا وصف المزاد هو هكذا وصف المزاد هو هكذا وصف المزاد هو هكذا وصف المزاد</p>
                        </div>
                        <div class="author-pricing-area">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="author d-flex align-items-center justify-content-sm-start justify-content-center">
                                        <div class="author-image">
                                            <img src="assets/images/bg/auction-author.png" alt="">
                                        </div>
                                        <div class="author-name">
                                            <span>صاحب السلعة</span>
                                            <a href="#">
                                                <h6>رشيد الوصابي</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center text-sm-end ">
                                    <div class="price">
                                        <div class="current-price">السعر الحالي</div>
                                        <h4><span>$ 3,459.32</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="auction-product-overview text-lg-end text-center">
                            <h4 class="component-title">لمحة مختصرة</h4>
                            <ul class="overview-list">

                                <li><span> تصنيف </span> : <span>سيارات</span> </li>
                                <li><span> رقم المزاد </span> : <span> #12159EDT23 </span> </li>
                            </ul>
                        </div>
                        <div class="bid-now-area text-lg-end text-center">
                            <h4 class="component-title">زايد الأن</h4>
                            <p class="row "> <span class="col-sm-6">  مزايدتك : 20$</span> <span class="col-sm-6"> أقل مزايدة ممكنة : 20.00$</span></p>
                            <form>
                                <div class="form-inner d-flex justify-content-lg-start justify-content-center align-items-center flex-sm-nowrap flex-wrap gap-4">
                                    <input type="text" placeholder="$00.00"><a href="#" class="eg-btn btn--fill-primary bid-btn">زايد</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Section ِAuction Details  -->
            <!-- ---------------------------------------- -->
            <div class="row gy-5">
                <div class="col-xl-3 col-lg-4">
                    <ul class="nav nav-pills d-flex flex-column justify-content-center gap-sm-4 gap-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active details-tab-btn" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">وصف</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link details-tab-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">الموقع في الخريطة</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link details-tab-btn" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">فيديو عن</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link details-tab-btn" id="pills-bid-tab" data-bs-toggle="pill" data-bs-target="#pills-bid" type="button" role="tab" aria-controls="pills-bid" aria-selected="false">سجل المزايدات</button>
                        </li>
                    </ul>
                </div>

                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="describe-content">
                                <h4 class="component-title">وصف المنتج </h4>
                                <!-- Befor final paragraph mb-20 -->
                                <p class="mb-20" style="font-weight: 600;">هو هكذا أول فقرة وصف هو هكذا أول فقرة وصف هو هكذا أول فقرة وصف هو هكذا أول فقرة وصف هو هكذا أول فقرة وصف هو هكذا أول فقرة وصف هو هكذا أول فقرة وصف </p>
                                <p style="font-weight: 600;"> هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف
                                    هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة
                                    وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف هو هكذا ثاني فقرة وصف
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="map-area">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.73467103074!2d90.36181521536365!3d23.828032291722206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13a21730b43%3A0xb14a9c52d01c00d9!2sMirpur-12%20Bus%20Stand!5e0!3m2!1sen!2sbd!4v1640171021567!5m2!1sen!2sbd"
                                    allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="about-video">
                                <div class="wrapper">
                                    <div class="video-pluse">
                                        <span style="--i:1;"></span>
                                        <span style="--i:5;"></span>
                                        <span style="--i:3;"></span>
                                        <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-frame video-icon video-open"><i class="bx bx-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-bid" role="tabpanel" aria-labelledby="pills-bid-tab">
                            <div class="bid-list-area">
                                <h6>آخر المزايدات</h6>
                                <ul class="bid-list">
                                    <li>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-7">
                                                <div class="bidder-area">
                                                    <div class="bidder-img">
                                                        <img src="assets/images/bg/bidder1.png" alt="">
                                                    </div>
                                                    <div class="bidder-content">
                                                        <a href="#">
                                                            <h6>رشيد الوصابي</h6>
                                                        </a>
                                                        <p>24.50 $</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="bid-time">
                                                    <p>4 أربع ساعات</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-7">
                                                <div class="bidder-area">
                                                    <div class="bidder-img">
                                                        <img src="assets/images/bg/bidder1.png" alt="">
                                                    </div>
                                                    <div class="bidder-content">
                                                        <a href="#">
                                                            <h6>رشيد الوصابي</h6>
                                                        </a>
                                                        <p>24.50 $</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="bid-time">
                                                    <p>4 أربع ساعات</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-7">
                                                <div class="bidder-area">
                                                    <div class="bidder-img">
                                                        <img src="assets/images/bg/bidder1.png" alt="">
                                                    </div>
                                                    <div class="bidder-content">
                                                        <a href="#">
                                                            <h6>رشيد الوصابي</h6>
                                                        </a>
                                                        <p>24.50 $</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="bid-time">
                                                    <p>4 أربع ساعات</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-7">
                                                <div class="bidder-area">
                                                    <div class="bidder-img">
                                                        <img src="assets/images/bg/bidder1.png" alt="">
                                                    </div>
                                                    <div class="bidder-content">
                                                        <a href="#">
                                                            <h6>رشيد الوصابي</h6>
                                                        </a>
                                                        <p>24.50 $</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="bid-time">
                                                    <p>4 أربع ساعات</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  End ُSecond Section ِAuction  -->
    <!-- ---------------------------------------- -->

    <!-- ---------------------------------------- -->
    <!-- Third Section Live Auction  -->
    <!-- ---------------------------------------- -->
    <div class="best-work-section pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="best-work-select d-flex justify-content-between flex-wrap">
                    <h5>المزادات الجارية</h5>
                    <select name="best-work">
                        <option>فرز حسب التصنيف</option>
                        <option>أراضي</option>
                        <option>سارات</option>
                        <option>منتجات متنوعة</option>
                    </select>
                </div>
            </div>

            <div class="row d-flex justify-content-center g-4">
                <!-- First Live Auction Item  -->
                <!-- ---------------------------------------- -->
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="eg-card auction-card1 hover-shine">
                        <div class="auction-img">
                            <img src="assets/images/auction/best-w1.png" alt="">
                            <div class="auction-timer">
                                <div class="countdown" id="timer2">
                                    <h4><span id="hours2">05</span>س : <span id="minutes2">52</span>د : <span id="seconds2">32</span>ث</h4>
                                </div>
                            </div>

                        </div>
                        <div class="auction-content">
                            <h5><a href="auction-details.html">هو هكذا وصف مختصر هو هكذا وصف مختصر هو هكذا وصف مختصر هو هكذا وصف مختصر هو هكذا وصف مختصر </a></h5>
                            <p> العسر الحالي : <span class="price"> 300.0$</span> </p>
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
                <!-- ٍSecond Live Auction Item  -->
                <!-- ---------------------------------------- -->
                <div class="col-lg-4 col-md-6 col-sm-10 ">
                    <div class="eg-card auction-card1 hover-shine">
                        <div class="auction-img">
                            <img src="assets/images/auction/best-w1.png" alt="">
                            <div class="auction-timer">
                                <div class="countdown" id="timer2">
                                    <h4><span id="hours2">05</span>س : <span id="minutes2">52</span>د : <span id="seconds2">32</span>ث</h4>
                                </div>
                            </div>

                        </div>
                        <div class="auction-content">
                            <h5><a href="auction-details.html">هو هكذا وصف مختصر هو هكذا وصف مختصر هو هكذا وصف مختصر هو هكذا وصف مختصر هو هكذا وصف مختصر </a></h5>
                            <p> العسر الحالي : <span class="price"> 300.0$</span> </p>
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
                    <div class="eg-card auction-card1 hover-shine">
                        <div class="auction-img">
                            <img src="assets/images/auction/best-w1.png" alt="">
                            <div class="auction-timer">
                                <div class="countdown" id="timer2">
                                    <h4><span id="hours2">05</span>س : <span id="minutes2">52</span>د : <span id="seconds2">32</span>ث</h4>
                                </div>
                            </div>

                        </div>
                        <div class="auction-content">
                            <h5><a href="auction-details.html">هو هكذا وصف مختصر هو هكذا وصف مختصر هو هكذا وصف مختصر هو هكذا وصف مختصر هو هكذا وصف مختصر </a></h5>
                            <p> العسر الحالي : <span class="price"> 300.0$</span> </p>
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
        </div>
    </div>
    <!-- End Third Section Live Auction  -->
    <!-- ---------------------------------------- -->

</x-layout>