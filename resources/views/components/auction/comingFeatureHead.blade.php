@props(['comingFeature'])


<div class="auction-img">
    
        <img src=" {{$comingFeature->product_main_image_location ? 
            asset('storage/'.$comingFeature->product_main_image_location) :
            asset('/images/auction/cate1.png') }} " alt=""/>

        <x-timer :section="2" :productId="$comingFeature->id" :endDate="$comingFeature->auction_end_date" />
    

</div>