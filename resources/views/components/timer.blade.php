@props(['productId' , 'endDate'])


<div  class="auction-timer2 gap-3" id="timer">
    <script type="text/javascript">
        timer.countDown('{{$endDate}}' , {{$productId}});
    </script>

    <div class="countdown-single">
        <h5 id="days-{{$productId}}"></h5>
        <span>أيام</span>
    </div>

    <div class="countdown-single">
        <h5 id="hours-{{$productId}}"></h5>
        <span>ساعات</span>
    </div>
    
    <div class="countdown-single">
        <h5 id="minutes-{{$productId}}"></h5>
        <span>دقائق</span>
    </div>
    
    <div class="countdown-single">
        <h5 id="seconds-{{$productId}}"></h5>
        <span>ثواني</span>
    </div>

</div>