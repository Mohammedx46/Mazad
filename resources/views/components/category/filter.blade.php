

<div class="row mb-50">
    <div class="all-comments-area d-flex justify-content-between flex-wrap">
        <h5>{{$filterTitle}}</h5>
        <x-search targetController="category-auction" placeHolder="ابحث عن المنتج بالاسم أو الوصف" />
        
        <form method="get"  action="/category-auction">
            <input type="sreach" id="search" name="search" class=" col-ms-7" placeholder="slkdfj" >
            <button type="submit" class="col-sm-1" style="border: none; background: transparent;color: #234432" > <i class="fa fa-search"  aria-hidden="true"></i> </button>
        </form>

       
        <select name="best-work" onchange="route(event)" >
            @foreach ($categories as $category)
                <option value="{{$category->id}}" >
                    {{$category->category_name}} 
                </option>
            @endforeach
        </select>
        
    </div>
</div>