<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 title">
                <h1><i class="fa fa-bars"></i> عرض بيانات التصنيفات </h1>
            </div>

            <div class="col-sm-12">
                <div class="col-sm-8 search-div">
                    الكل( {{$allCategoriesCount}} )</a>
                </div>
                
                <x-admin.search target="/categories/categoriesShow" placeholder="ابحث عن التصنيف بالاسم أو الوصف" />
            </div>

            <!------------- Right Side Content -------------->

            <div class="col-sm-12 cat-view">
                <!----------- Table of Categories Content ------------>
                <div class="content">
                    <table class="table table-striped">
                        <!------------- Head of Table -------------->
                        <thead>
                            <tr>
                                {{-- <th width="5%"><input type="checkbox" id="select-all"></th> --}}
                                <th width="10%">اسم التصنيف</th>
                                <th width="35%">وصف التصنيف</th>
                                <th width="40%">صورة التصنيف</th>
                                <th width="15%">العملية</th>
                            </tr>
                        </thead>
                        <!------------- Body of Table -------------->
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    {{-- <td><input type="checkbox" name="select-cat"> </td> --}}
                                    <td>{{$category->category_name}}</td>
                                    <td>{{$category->category_description}}</td>
                                    <td>
                                        <img 
                                            src="{{$category->category_image_location ? 
                                            asset('storage/'.$category->category_image_location) :
                                            asset('storage/images/auction/cate1.png')}}"

                                            alt="image of {{$category->category_name}} category"  width="200" />
                                    </td>	
                                    <td>
                                        <a href="/categories/{{$category->id}}/edit"
                                            class='btn btn-success'><i class="fa-solid fa-pen-to-square"></i> تعديل</a>

                                        <form method="POST" action="/categories/{{$category->id}}" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button href="" class="btn btn-danger" > حذف</button>
                                        </form>
                                    </td>														
                                </tr>
                            @endforeach
                            
                        </tbody>

                    </table>
                </div> 	
                {{ $categories->links('adminPagination') }}					
            </div>
        </div>
    </div>
</x-admin-layout>