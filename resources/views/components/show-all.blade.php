@props(['targetPage'])

<div class="row d-flex justify-content-center">
    <div class="col-md-4 text-center">
       
        <a href="{{$targetPage}}" {{$attributes->merge(['class'=>"eg-btn  mx-auto"])}} >عرض الكل</a>
    </div>
</div>