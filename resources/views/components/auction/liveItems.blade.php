@props(['products', 'section'])

<x-container.items-container>
    @if ( !is_null( $products))

        @foreach ($products as $product)
            <div {{$attributes->merge(['class' => "col-lg-4 col-md-6 col-sm-10 "])}} >
                <div data-wow-duration="0.5s" data-wow-delay="0.2s" class="eg-card auction-card1 hover-shine wow fadeInDown">
              
                    <x-auction.head :section="$section" :product="$product"/>
                    {{-- Second Part --}}
                    <x-auction.content :product="$product"/>
                    
                </div>
            </div>
        @endforeach
    @else 
            how are you
    @endif
</x-container.items-container>