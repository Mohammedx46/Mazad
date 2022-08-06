@props(['comingFeatures'])

<x-container.items-container>
    @if ( !is_null( $comingFeatures))
        @foreach ($comingFeatures as $comingFeature)
            <div {{$attributes->merge(['class' => "col-lg-4 col-md-6 col-sm-10 "])}} >
                <div data-wow-duration="0.5s" data-wow-delay="0.2s" class="eg-card auction-card1 hover-shine wow fadeInDown">
                    <x-auction.comingFeatureHead :comingFeature="$comingFeature"/>
                    {{-- Second Part --}}
                    <x-auction.comingFeatureContent :comingFeature="$comingFeature"/>
                </div>
            </div>
        @endforeach
    @endif
</x-container.items-container>