

@auth
    @unless($is_bid)
        <div class="bid-now-area text-lg-end text-center">
            <h4 class="component-title">زايد الأن</h4>
            <form action="/bidding/{{$product->id}}" method="GET">
                @csrf
                <div class="form-inner d-flex justify-content-lg-start justify-content-center align-items-center flex-sm-nowrap flex-wrap gap-4">
                    <button type="submit"  class="eg-btn btn--fill-primary bid-btn">بدء المزايدة</button>
                </div>
            </form>
        </div>
    @else
        <div class="bid-now-area text-lg-end text-center">
            <h4 class="component-title">زايد الأن</h4>
                <p class="row "> <span class="col-sm-6">  مزايدتك : 20$</span> <span class="col-sm-6"> أقل مزايدة ممكنة : 20.00$</span></p>
            <form action="?action=bid&product_id={{$product->id}}" method="POST">
                @csrf
                <div class="form-inner d-flex justify-content-lg-start justify-content-center align-items-center flex-sm-nowrap flex-wrap gap-4">
                    
                    <input type="text" placeholder="$00.00" name="user_price" required
                        value="{{old('user_price')}}"/>
                    
                    @error('user_price')
                        <div class="error-alert" role="alert"> {{$message}} </div>
                    @enderror
                    <button type="submit" class="eg-btn btn--fill-primary bid-btn">زايد</button>
                </div>
            {{-- </form> --}}
        </div>
    @endunless
    @else
    <button class="eg-btn btn--fill-primary bid-btn"><a href="/signup" id="sign-reverse" style="">  إنشاء حسباب للمزايدة </a></button>
@endauth