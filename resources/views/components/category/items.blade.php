@props(['categories'])

@foreach ($categories as $category)
    
<div class="swiper-slide mr-110">
    <div class="eg-card category-card1">
        <div class="cat-icon">
            <img src="{{url('images/auction/'.$category->category_image_location)}}" width="60" height="60"/>
        </div>
        <a href="auction-details">
            <h5>{{$category->category_name}}</h5>
        </a>
    </div>
</div>

@endforeach