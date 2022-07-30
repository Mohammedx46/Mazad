@props(['products'])

<x-container.items-container>
    @unless (false)
        @foreach ($products as $product)
            <div {{$attributes->merge(['class' => "col-lg-4 col-md-6 col-sm-10 "])}} >
                <div data-wow-duration="0.5s" data-wow-delay="0.2s" class="eg-card auction-card1 hover-shine wow fadeInDown">
                    
                    <x-auction.head :product="$product"/>
                    {{-- Second Part --}}
                    <x-auction.content :product="$product"/>
                    
                </div>
            </div>
        @endforeach
        
    @endunless
</x-container.items-container>