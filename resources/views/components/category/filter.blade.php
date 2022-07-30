

<div class="row mb-50">
    <div class="all-comments-area d-flex justify-content-between flex-wrap">
        <h5>كل المزادات</h5>
        <select name="best-work" >
            <option >اختر تصنيف</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}"> {{$category->category_name}} </option>
            @endforeach
        </select>
    </div>
</div>