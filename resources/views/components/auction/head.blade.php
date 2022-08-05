@props(['product'])


<div class="auction-img">
    {{-- {{dd($product->product_main_image_location)}} --}}
    <img src=" {{$product->product_main_image_location ? 
        asset('storage/'.$product->product_main_image_location) :
        asset('/images/auction/cate1.png') }} " alt="">

    
    <x-timer :productId="$product->id" :endDate="$product->bid_end_date" />

</div>