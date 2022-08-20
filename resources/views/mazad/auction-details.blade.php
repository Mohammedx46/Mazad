<x-layout :heading="$heading">

    <?php 
        if ( isset($_GET['action'], $_GET['product_id']))
        {
            $product_id= $_GET['product_id'] ;
            $product = Products::find($product_id);
            switch($_GET['action'])
            {     
                case 'bid':
                dd(request());
                    $formFields = request()->validate([
                            'user_price' => ['required', 'numeric', 'min:20'],
                        ]);
                    $auctions = Auctions::all();
                    foreach($auctions as $auction)
                    {
                        if ( $auction->product_id == $product->id)
                            $formFields['auction_id'] = $auction->id;
                    }
                    $formFields['user_id'] = auth()->id();

                    $auctionUsers =  AuctionUsers::all()->where('user_id' , '=' , auth()->id())
                        ->where('auction_id' , '=' , $formFields['auction_id'])
                        ->sum('user_price');
                    $formFields['user_total_bidding'] = $auctionUsers;

                    
                    AuctionUsers::create($formFields);
                    $auctionUsers = AuctionUsers::latest()->where ('auction_id' , '=' , $formFields['auction_id']);
                break;
            }
        }
    ?>
        
    
    <x-container.section class="auction-details-section  pt-110" >
        <!-- First Section ِAuction and Bidding -->
        <!-- --------------------------------- -->
        <div class="row gy-5 mb-50">
            <div class="col-lg-6 d-flex justify-content-center flex-column">
                <div class="tab-content mb-4 d-flex justify-content-lg-start justify-content-center">
                    <div class="tab-pane big-image fade show active" id="gallery-img1">
                        <div class="auction-img auction-gallery-timer d-flex align-items-center justify-content-center flex-wrap">
                            <x-timer :section="5" :endDate="$product->auction_end_date" :productId="$product->id"/>
                        </div>
                        <img src=" {{$product->product_main_image_location ? 
                                asset('storage/'.$product->product_main_image_location) :
                                asset('storage/images/bg/auction-big1.png') }}" 
                                class="img-fluid" alt="" width="500px" />
                    </div>
                    <div class="tab-pane big-image fade" id="gallery-img2">
                        <div class="auction-gallery-timer d-flex align-items-center justify-content-start">
                            <x-timer :section="6" :endDate="$product->auction_end_date" :productId="$product->id"/>
                        </div>
                            <img src=" {{$product->product_main_image_location ? 
                                asset('storage/'.$product->product_main_image_location) :
                                asset('storage/images/bg/auction-big1.png') }}" 
                                class="img-fluid" alt=""  width="600px" />   
                    </div>
                    <div class="tab-pane big-image fade" id="gallery-img3">
                        <div class="auction-gallery-timer d-flex align-items-center justify-content-start">
                            <x-timer :section="7" :endDate="$product->auction_end_date" :productId="$product->id"/>
                        </div>
                        <img src="{{asset('storage/images/bg/auction-big3.png')}}" class="img-fluid" alt="" >
                    </div>
                    <div class="tab-pane big-image fade show" id="gallery-img4">
                        <div class="auction-gallery-timer d-flex align-items-center justify-content-start">
                            <x-timer :section="8" :endDate="$product->auction_end_date" :productId="$product->id"/>
                        </div>
                        <img src="{{asset('storage/images/bg/auction-big4.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                
                <ul class="nav small-image-list d-flex justify-content-lg-start justify-content-center gap-4">
                    <li class="nav-item">
                        <div id="details-img1" data-bs-toggle="pill" data-bs-target="#gallery-img1" aria-controls="gallery-img1">
                            <img src="{{url('storage/images/bg/auction-sm1.png')}} " class="img-fluid" alt="">
                        </div>
                    </li>
                    <li class="nav-item">
                        <div id="details-img2" data-bs-toggle="pill" data-bs-target="#gallery-img2" aria-controls="gallery-img2">
                            <img src="{{asset('storage/images/bg/auction-sm3.png')}}" class="img-fluid" alt="">
                        </div>
                    </li>
                    <li class="nav-item">
                        <div id="details-img3" data-bs-toggle="pill" data-bs-target="#gallery-img3" aria-controls="gallery-img3">
                            <img src="{{url('storage/images/bg/auction-sm3.png')}}" class="img-fluid" alt="">
                        </div>
                    </li>
                    <li class="nav-item">
                        <div id="details-img4" data-bs-toggle="pill" data-bs-target="#gallery-img4" aria-controls="gallery-img4">
                            <img src="{{url('storage/images/bg/auction-sm4.png')}}" class="img-fluid" alt="">
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Left Side of Auction and Bidding  -->
            <!-- --------------------------------- -->
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
                        <h3>{{$product->product_name}}</h3>
                        <p>{{$product->product_short_description}}</p>
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
                                            <h6>{{ $user->name . ' ' . $user->last_name}}</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center text-sm-end ">
                                <div class="price">
                                    <div class="current-price">السعر الحالي</div>
                                    <h4><span>$ {{$product->product_start_price}}</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="auction-product-overview text-lg-end text-center">
                        <h4 class="component-title">لمحة مختصرة</h4>
                        <ul class="overview-list">
                            <li><span> تصنيف </span> : <span>{{$category->category_name}}</span> </li>
                            <li><span> رقم المزاد </span> : <span> #12159EDT23 </span> </li>
                        </ul>
                    </div>
                    
                    <livewire:bidding/>
                    
                    
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
                            <p class="mb-20" style="font-weight: 600;">{{$product->product_short_description}} </p>
                            <p style="font-weight: 600;"> {{$product->product_description}} </p>
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
    </x-container.section>
    <!--  End ُSecond Section ِAuction  -->
    <!-- ---------------------------------------- -->

    <!-- ---------------------------------------- -->
    <!-- Third Section Live Auction  -->
    <!-- ---------------------------------------- -->
    <x-container.section class=" best-work-section pt-110 pb-110" >

        <x-category.filter :categories="$categories" filterTitle="المزادات الجارية" />

        {{-- @php
            dd($products)
        @endphp --}}
        <x-auction.items :section="6" :products="$products" />

    </x-container.section>
    <!-- End Third Section Live Auction  -->
    <!-- ---------------------------------------- -->

</x-layout>