<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 title">
                <h1><i class="fa fa-bars"></i> عرض بيانات المنتجات </h1>
            </div>

            <div class="col-sm-12">
                <div class="col-sm-8 search-div">
                    الكل( {{$allProductsCount}} )</a>
                </div>

                <x-admin.search target="/products/productsShow" placeholder="ابحث عن المنتج بالاسم أو الوصف" />
            </div>
            
            <!------------------ End Header ------------------>
            <!------------------------------------------------>


            <div class="clearfix"></div>

            <div class="col-sm-12">
                <div class="content">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                {{-- <th width="3%"><input type="checkbox" id="select-all"> </th> --}}
                                <th width="8%">اسم المنتج </th>
                                <th width="10%">وصف مختصر</th>
                                <th width="15%"> وصف مفصل </th>
                                <th width="7%">السعر الإبتدائي للمزاد</th>
                                <th width="5%">البيع الفوري</th>
                                <th width="4%">الكمية</th>
                                <th width="7%">تاريخ البداية</th>
                                <th width="7%">تاريخ النهاية </th>
                                <th width="12%">الصورة الأساسية</th>
                                <th width="4%">هل بيع</th>
                                <th width="10%">العملية</th>
                            </tr>
                        </thead>

                        <!----------------- Body of Table ----------------->
                        <tbody>
                            
                            @foreach ($products as $product)
                                <tr>
                                
                                    {{-- <td><input type="checkbox" name="select-cat"> </td> --}}
                                    <td>{{$product->product_name}} </td>
                                    <td>{{$product->product_short_description}} </td>
                                    <td>{{$product->product_description}} </td>
                                    <td>{{$product->product_start_price}} </td>
                                    <td>{{$product->product_sell_now_price}} </td>
                                    <td>{{$product->product_quantity}} </td>
                                    <td>{{$product->auction_start_date}} </td>
                                    <td>{{$product->auction_end_date}} </td>
                                    <td>
                                        <img 
                                            src="{{$product->product_main_image_location ? 
                                            asset('storage/'.$product->product_main_image_location) :
                                            asset('/images/auction/cate1.png')}}"

                                            alt="image of {{$product->product_name}} Product" width="200" /> 
                                    </td>
                                    <td>{{$product->is_product_sold}} </td>
                                    <td>
                                        <a href="/products/{{$product->id}}/edit"
                                            class='btn btn-success'><i class="fa-solid fa-pen-to-square"></i> تعديل</a>

                                        <form method="POST" action="/products/{{$product->id}}" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button href="" class="btn btn-danger" > حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--------------- End Body of Table --------------->
                    </table>
                </div>
                {{ $products->links('adminPagination') }}
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</x-admin-layout>