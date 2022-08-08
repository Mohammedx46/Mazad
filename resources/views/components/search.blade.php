@props(['targetController','placeHolder'])


<div class="mobile-search">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-11">
                <label>عن ماذا تبحث?</label>
                <input type="text" placeholder="ابحث عن المزاد بالتصنيف أو الاسم أو الوصف">
            </div>
            <div class="col-1 d-flex justify-content-end align-items-center">
                <div class="search-cross-btn">

                    <i class="bi bi-x"></i>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- <form  action="/{{$targetController}}">
    <input type="sreach" id="search" name="search" class=" col-ms-7" placeholder="{{$placeHolder}}" >
    <button type="submit" class="col-sm-1" style="border: none; background: transparent;color: #234432" > <i class="fa fa-search"  aria-hidden="true"></i> </button>
</form> --}}
