<x-admin-layout>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 title">
                <h1><i class="fa fa-bars"></i> إضافة بيانات المنتج</h1>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <!-------------- Middel of content --------------->
                    <!------------------------------------------------>
                    <div class="col-sm-11">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-circle"></i> إضافة بيان جديد
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <form role="form" method="POST" action="/products" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12 form-group">
                                                <!-------------- Product Name Field --------------->
                                                
                                                    <label class="labelAdd  col-md-6">اسم المنتج
                                                        <input type="text" placeholder="اسم المنتج أو الخدمة المقدمة"
                                                            class="form-control" name="product_name" required 
                                                            value="{{ old('product_name') }}"/>
                                                            @error('product_name')
                                                                <div class="error-alert" role="alert"> {{$message}}</div>
                                                            @enderror
                                                    </label>

                                                <!------------ Product Short Description Field -------------->
                                                
                                                    <label class="labelAdd col-md-6"> وصف مختصر
                                                        <input type="text" class="form-control"
                                                            name="product_short_description" placeholder="وصف مختصر عن المنتج أو الخدمة" required 
                                                            value="{{ old('product_short_description') }}"/>
                                                            @error('product_short_description')
                                                                <div class="error-alert" role="alert"> {{$message}} </div>
                                                            @enderror
                                                    </label>
                                                
                                            </div>

                                            <!------------ Product Description Field -------------->
                                            <div class=" col-md-12 form-group">
                                                <label class="labelAdd col-md-12"> وصف مفصل
                                                    <textarea type="text" class="form-control"
                                                        placeholder="وصف مفصل عن المنتج أو الخدمة" name="product_description" required >
                                                        {{ old('product_description') }}
                                                    </textarea>
                                                    @error('product_description')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <!------------ Product Price Field -------------->
                                                <label  class="labelAdd col-md-4">سعر بداية المزاد
                                                <input type="text" class="form-control"
                                                    placeholder="مبلغ بداية المزاد" name="product_start_price" required
                                                    value="{{ old('product_start_price') }}"/> 
                                                    @error('product_start_price')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>

                                                <!------------ Product Sell Now Price Field -------------->
                                                <label  class="labelAdd col-md-4">سعر البيع الفوري
                                                <input type="text" class="form-control"
                                                    placeholder="سعر المنتج أو الخدمة للبيع الفوري" name="product_sell_now_price" required
                                                    value="{{ old('product_sell_now_price') }}"/> 
                                                    @error('product_sell_now_price')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>
                                                
                                                <!------- Product Quantity Field -------->
                                                <label class="labelAdd col-md-4">الكمية
                                                    <input type="number" class="form-control"
                                                        placeholder="الكمية المتوفرة بالحبة" name="product_quantity" min="1" required
                                                        value="{{ old('product_quantity') }}"/>
                                                        @error('product_quantity')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <!------------ Product Start Date Field -------------->
                                                <label  class="labelAdd col-md-6">تاريخ بدء المزاد
                                                <input type="datetime-local" class="form-control"
                                                    placeholder="تاريخ بدء العد التنازلي لإنتهاء المزاد" name="auction_start_date"  required
                                                    value="{{ old('auction_start_date') }}"/>
                                                    @error('auction_start_date')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror 
                                                </label>
                                                

                                                <!------------ Product End Date Field -------------->
                                                
                                                <label  class="labelAdd col-md-6">تاريخ نهاية المزاد
                                                <input type="datetime-local" class="form-control"
                                                    placeholder="تاريخ ناية المزاد" name="auction_end_date" required
                                                    value="{{ old('auction_end_date') }}"/> 
                                                    @error('auction_end_date')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>
                                            </div>

                                            
                                            <div class="col-md-12 form-group">
                                                <!------- Product Main Image Location Field --------------->
                                                <label class="labelAdd col-md-3">الصورة الرئسية للمنتج

                                                    <input type="file" class="form-control"
                                                        name="product_main_image_location" required
                                                        value="{{ old('product_main_image_location') }}"
                                                    />

                                                        @error('product_main_image_location')
                                                            <div class="error-alert" role="alert"> {{$message}} </div>
                                                        @enderror

                                                </label> 
                                                
                                                <!----------- Product Category Field ------------>
                                                <label class="labelAdd col-md-3">تصنيف المنتج
                                                    <select class="form-control" name="productcategories_id" required>
                                                        
                                                        @foreach ($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->category_name}} </option>
                                                        @endforeach
                                                        
                                                    </select>
                                                    @error('productcategories_id')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>
                                            

                                            <div class="form-group col-md-12"></div>

                                            <div style="float:right;">
                                                <button type="submit" name="submit" class="btn btn-primary"
                                                    style="font-size:1em; width:6em">إضافة</button>

                                                <button type="reset" name="reset" class="btn btn-danger"
                                                    style="font-size:1em; width:6em">إلغاء</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>