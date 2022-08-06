{{-- @props(['targetPage']) --}}

<div class="row d-flex justify-content-center">
    <div class="col-md-4 text-center">
        {{-- @php
            dd($targetPage)
        @endphp --}}
        <a href="auction-category/?categoryId=1" {{$attributes->merge(['class'=>"eg-btn  mx-auto"])}} >عرض الكل</a>
    </div>
</div>