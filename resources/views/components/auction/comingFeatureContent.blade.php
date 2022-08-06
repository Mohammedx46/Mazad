@props(['comingFeature'])

<div class="auction-content">
    
    <div class="c-feature-category">{{$comingFeature->product_title}}</div>

    <h5><a href="auction-details"> {{$comingFeature->product_description}}</a></h5>
    <p>السعر الحالي : {{$comingFeature->product_start_price}} </p>
    <div class="السعر">السعر الإبتدائي  {{$comingFeature->product_start_price}}</div>
    <div class="auction-card-bttm">
        <a href="auction-details" class="eg-btn btn--outline">زايد</a>
        <div class="share-area">
            <ul class="social-icons d-flex">
                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
            </ul>
            <div>
                <a href="#" class="share-btn"><i class='bx bxs-share-alt'></i></a>
            </div>
        </div>
    </div>
</div>