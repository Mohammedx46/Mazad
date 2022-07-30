

<x-layout>

    
    <!-- ---------------------------------------- -->
    <!-- Second Section Categories  -->
    <!-- ---------------------------------------- -->
    <section class="category-section pt-110 pb-110 mb-110">
        <div class="container position-relative">
            
            <x-sectionTitle title='إستعراض حسب التصنيف' description="" />

            <div class="row">
                <div class="col-12">
                    <div class="swiper category1-slider" style="width: 100%;">
                        <div class="swiper-wrapper">
                            {{-- @foreach ($categories as $category) --}}
                            <x-category.items  categoryName="why1" categoryImage="images/auction/act2.png" />
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
    <x-container.section class="live-auction">
            <!-- Introduction Section  -->           
            <x-sectionTitle  title='المزادات الجارية' description="إستعرض في أفضل مزاد عن مزادات المنتجات. نريد أن نكون جزء من إبتسامتك ,نجاحك و منمو مستقبلك" />

            <!-- Live Auction Items  -->               
            <x-auction.items :products="$products" />

            {{-- Show All Button --}}
            <x-show-all class="btn--fill-primary" />
    </x-container.section>

    <!-- End Third Section Live Auction  -->
    <!-- ---------------------------------------- -->


    <!-- ---------------------------------------- -->
    <!-- Fourth Section Coming Featured Assets  -->
    <!-- ---------------------------------------- -->
    <x-container.section class="pb-110 coming-feature pt-110">
        <!-- Introduction Section  -->           
        <x-sectionTitle  title='مزادات قادمة'
            description="إستعرض في أفضل مزاد عن مزادات المنتجات. نريد أن نكون جزء من إبتسامتك ,نجاحك و منمو مستقبلك" 
        />

        <!-- Live Auction Items  -->               
        <x-auction.items :products="$products" />

        {{-- Show All Button --}}
        <x-show-all class="btn--fill-white" />
    </x-container.section>
    <!-- End Fourth Section Coming Featured Assets  -->
    <!-- ---------------------------------------- -->



    <!-- ---------------------------------------- -->
    <!-- Fifth Section Hot Collection  -->
    <!-- ---------------------------------------- -->
    <x-container.section class="top-author-section pt-110 pb-110">
        <!-- ---------------------------------------- -->
        <!-- Introduction Section  -->
        <x-sectionTitle title='مقدمي العروض' 
            description="إستعرض في أفضل مزاد عن مزادات المنتجات. نريد أن نكون جزء من إبتسامتك ,نجاحك و منمو مستقبلك" 
        />

        <x-author.authors/>

        <x-show-all class="btn--fill-primary" />
    </x-container.section>
    <!--  End Fifth Section Hot Collection  -->
    <!-- ---------------------------------------- -->
    
</x-layout>