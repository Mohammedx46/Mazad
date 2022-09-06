

<x-layout :heading="$heading">

    <x-container.section class="live-auction-section pt-110">
            <!-- Second Live Auctions  -->
            <x-auction.items :section="1" :products="$products"  class="col-lg-4"/>

            <!-- Third Pagination Live Auctions  --> 
            {{ $products->links('pagination') }}
            
        </x-container.section>

    <!-- End Second Section Live Auctions  -->
    <!-- ---------------------------------------- -->

</x-layout>