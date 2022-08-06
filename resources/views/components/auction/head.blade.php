@props(['product','comingFeature', 'section'])


<div class="auction-img">
        <img src=" {{$product->product_main_image_location ? 
            asset('storage/'.$product->product_main_image_location) :
            asset('/images/auction/cate1.png') }} " alt=""/>

        <x-timer :section="$section" :productId="$product->id" :endDate="$product->auction_end_date" />

</div>