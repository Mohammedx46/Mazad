@props(['categories'])

@foreach ($categories as $category)
    
<div class="swiper-slide mr-110">
    <div class="eg-card category-card1">
        <div class="cat-icon">
            <img src="{{url('images/auction/'.$category->category_image_location)}}" width="60" height="60"/>
                {{$category->category_image_location}}
        </div>
        <a href="auction-category">
            <h5>{{$category->category_name}}</h5>
        </a>
    </div>
</div>

@endforeach