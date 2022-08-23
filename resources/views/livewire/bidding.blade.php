

{{-- @php
    dd($is_bid)
@endphp --}}

@auth
    @unless(auth()->user()->is_bidding)
        <div class="bid-now-area text-lg-end text-center">
            <h4 class="component-title">زايد الأن</h4>
            <div class="form-inner d-flex justify-content-lg-start justify-content-center align-items-center flex-sm-nowrap flex-wrap gap-4">
                <button  wire:click="isBidding({{$product->id}})"   class="eg-btn btn--fill-primary bid-btn" style="cursor: pointer">بدء المزايدة</button>
            </div>
        </div>
    @else
        <div class="bid-now-area text-lg-end text-center">
            <h4 class="component-title" id="bid">زايد الأن</h4>
                <p class="row "> <span class="col-sm-6">  مزايدتك : 20$</span> <span class="col-sm-6"> أقل مزايدة ممكنة : 20.00$</span></p>
            <form wire:submit.prevent="storeBidding({{$product->id}})"  >
                @csrf
                <div class="form-inner d-flex justify-content-lg-start justify-content-center align-items-center flex-sm-nowrap flex-wrap gap-4">
                    <input type="text" placeholder="$00.00" wire:model="user_price" required/>
                    <button type="submit" class="eg-btn btn--fill-primary bid-btn">زايد</button>
                </div>
                @error('user_price')
                    <div class="error-alert" role="alert"> {{$message}} </div>
                @enderror
            </form>
        </div>
    @endunless

    @else
        <button wire:click="login" class="eg-btn btn--fill-primary bid-btn">
            تسجيل الدخول  للمزايدة
        </button>
@endauth