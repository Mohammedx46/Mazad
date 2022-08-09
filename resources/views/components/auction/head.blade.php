@props(['product','comingFeature', 'section'])


<div class="auction-img">
        <img src=" {{$product->product_main_image_location ? 
            asset('storage/'.$product->product_main_image_location) :
            asset('storage/images/auction/cate1.png') }} " alt=""/>

        @unless ($section == 2)
            <x-timer :section="$section" :productId="$product->id" :endDate="$product->auction_end_date" />
        @else 
            @php
                $months = array(
                    "Jan" => "يناير",
                    "Feb" => "فبراير",
                    "Mar" => "مارس",
                    "Apr" => "أبريل",
                    "May" => "مايو",
                    "Jun" => "يونيو",
                    "Jul" => "يوليو",
                    "Aug" => "أغسطس",
                    "Sep" => "سبتمبر",
                    "Oct" => "أكتوبر",
                    "Nov" => "نوفمبر",
                    "Dec" => "ديسمبر"
                );
                $en_month = date("M", strtotime($product->auction_start_date));
                $ar_month = $months[$en_month];

                $day = date("d", strtotime($product->auction_start_date));

                $ar_year= date("Y", strtotime($product->auction_start_date));

            @endphp
        
            <p class="auction-timer2 gap-3 timer" style="color: #fff">{{ $ar_year . '  -  ' . $ar_month . '  -  ' . $day}} </p>
        
        @endunless

</div>