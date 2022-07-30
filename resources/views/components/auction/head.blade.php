@props(['product'])


<div class="auction-img">
    {{-- {{dd($product->product_main_image_location)}} --}}
    <img src="{{url('images/auction/'.$product->product_main_image_location)}}" alt="">

    <x-timer/>

</div>