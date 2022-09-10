<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 title">
                <h1><i class="fa fa-bars"></i> تعديل بيانات التصنيف</h1>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <!-------------- Middel of content --------------->
                    <!------------------------------------------------>
                    <div class="col-sm-11">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-edit"></i> تعديل التصنيف
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <form method="POST" action="/categories/{{$category->id}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>اسم التصنيف</label>
                                                <input type="text" name="category_name" class="form-control" required 
                                                    value="{{ $category->category_name }}"/>

                                                @error('category_name')
                                                    <div class="error-alert" role="alert"> {{$message}} </div>
                                                @enderror
                                            </div>				

                                            <div class="form-group">
                                                <label>وصف التصنيف</label>
                                                <textarea class="form-control" name="category_description" rows="5" required>
                                                    {{ $category->category_description }}
                                                </textarea>
                                                @error('category_description')
                                                    <div class="error-alert" role="alert"> {{$message}} </div>
                                                @enderror
                                            </div>

                                            <!----------- Category Image Field ------------>
                                            <div class="col-md-12 form-group">
                                                <label class="col-md-6">صورة التصنيف
                                                    <input type="file" class="form-control"
                                                        name="category_image_location" />
                                                        
                                                    <div class="col-md-3 " style="padding-top: 10px">
                                                        <img src="{{$category->category_image_location ? 
                                                            asset('storage/'.$category->category_image_location) :
                                                            asset('/images/auction/cate1.png') }} " width="200px" alt=""> 
                                                    </div> 
                                                    @error('category_image_location')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-success" name="submit_category">تعديل التصنيف</button>
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