

<div class="col-sm-6 text-center text-sm-end " wire:poll.750ms>
    <div class="price">
        <div class="current-price">السعر الحالي</div>
        @unless(!$currentPrice)
            <h4>
                <span>$ {{$currentPrice}}</span>
            </h4>
        @else
            <h4>
                <span>$ {{$product->product_start_price}}</span>
            </h4>
        @endunless
    </div>
</div>