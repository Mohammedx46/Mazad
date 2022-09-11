

<div   class="auction-timer2 gap-3 timer" id="timer" @if($days <= 0 && $hours <= 0 && $minutes <= 0 && $seconds <= 0)  @else wire:poll.2750ms @endif>
    <div class="countdown-single">
        <h5 id="days">{{$days}}</h5>
        <span>أيام</span>
    </div>

    <div class="countdown-single">
        <h5 id="hours">{{$hours}} </h5>
        <span>ساعات</span>
    </div>
    
    <div class="countdown-single">
        <h5 id="minutes">{{$minutes}} </h5>
        <span>دقائق</span>
    </div>
    
    <div class="countdown-single">
        <h5 id="seconds">{{$seconds}} </h5>
        <span>ثواني</span>
    </div>

</div>