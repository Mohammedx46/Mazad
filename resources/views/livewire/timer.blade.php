

<div   class="auction-timer2 gap-3 timer" id="timer" wire:poll.900ms>
    <div class="countdown-single">
        <h5 id="days-{{$productId}}{{$section}}">{{$days}}</h5>
        <span>أيام</span>
    </div>

    <div class="countdown-single">
        <h5 id="hours-{{$productId}}{{$section}}">{{$hours}} </h5>
        <span>ساعات</span>
    </div>
    
    <div class="countdown-single">
        <h5 id="minutes-{{$productId}}{{$section}}">{{$minutes}} </h5>
        <span>دقائق</span>
    </div>
    
    <div class="countdown-single">
        <h5 id="seconds-{{$productId}}{{$section}}">{{$seconds}} </h5>
        <span>ثواني</span>
    </div>

</div>