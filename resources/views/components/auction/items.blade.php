@props(['products', 'section'])

<x-container.items-container>
    {{-- @php
        dd($products)
    @endphp --}}
    @if (!$products->isEmpty())
        @foreach ($products as $product)
            <div {{$attributes->merge(['class' => "col-lg-4 col-md-6 col-sm-10 "])}} >
                <div data-wow-duration="0.5s" data-wow-delay="0.2s" class="eg-card auction-card1 hover-shine wow fadeInDown">
                    <x-auction.head  :product="$product" :section="$section"/>
                    {{-- Second Part --}}
                    <x-auction.content  :product="$product"/>
                </div>
            </div>
        @endforeach
    @else  
        @php
            if ($section == 1 )
            {
                echo  '<h1 style="text-align:center; margin:3em 0;">المعذرة, لا يوجد مزادات جارية حالياً</h1>' ;
            }
            else if ($section == 2)
            {
                echo  '<h1 style="text-align:center; color: #fff; margin:3em 0;">المعذرة, لا يوجد مزادات قادمة حالياً</h1>' ;
            }
        @endphp
    @endif
</x-container.items-container>