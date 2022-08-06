

<div class="row mb-50">
    <div class="all-comments-area d-flex justify-content-between flex-wrap">
        <h5>كل المزادات</h5>
        <form  action="/auction-category">
            <input type="sreach" id="search" name="search" class=" col-ms-7" placeholder="ابحث عن المنتج بالاسم" >
            <button type="submit" class="col-sm-1" style="border: none; background: transparent;color: #234432" > <i class="fa fa-search"  aria-hidden="true"></i> </button>
        </form>
        
        <select name="best-work" >
            <option >اختر تصنيف</option>
            @foreach ($categories as $category)
                <option >
                    <a href="auction-category/?categoryId={{$category->id}}">
                        {{$category->category_name}} 
                    </a> 
                </option>
            @endforeach
        </select>
        
    </div>
</div>