

<x-layout  :heading="$heading">

    <x-container.section class="live-auction-section pt-110">
            <!-- Filter  -->
            <x-category.filter :categories="$categories" filterTitle="كل المزادات" />

            <!-- Second Live Auctions  -->
            <x-auction.items :section="3" :products="$products"  class="col-lg-4"/>

            {{-- <!-- Third Pagination Live Auctions  --> --}}
            {{ $products->links('pagination') }}
            
        </x-container.section>

    <!-- End Second Section Live Auctions  -->
    <!-- ---------------------------------------- -->

</x-layout>