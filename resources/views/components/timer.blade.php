@props(['productId' , 'endDate' , 'section'])


<div  class="auction-timer2 gap-3 timer" id="timer" data-end-date="{{$endDate}}" data-product-id="{{$productId}}{{$section}}">

    <div class="countdown-single">
        <h5 id="days-{{$productId}}{{$section}}"></h5>
        <span>أيام</span>
    </div>

    <div class="countdown-single">
        <h5 id="hours-{{$productId}}{{$section}}"></h5>
        <span>ساعات</span>
    </div>
    
    <div class="countdown-single">
        <h5 id="minutes-{{$productId}}{{$section}}"></h5>
        <span>دقائق</span>
    </div>
    
    <div class="countdown-single">
        <h5 id="seconds-{{$productId}}{{$section}}"></h5>
        <span>ثواني</span>
    </div>

</div>