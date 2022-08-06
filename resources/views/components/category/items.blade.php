@props(['categories'])

@foreach ($categories as $category)
    
<div class="swiper-slide mr-110">
    <div class="eg-card category-card1">
        <div class="cat-icon">
            <img src=" {{$category->category_image_location ? 
                asset('storage/'.$category->category_image_location) :
                asset('/images/auction/cate1.png') }} "
                width="60" height="60"/>
        </div>
        <a href="auction-category/?categoryId={{$category->id}}">
            <h5>{{$category->category_name}}</h5>
        </a>
    </div>
</div>

@endforeach