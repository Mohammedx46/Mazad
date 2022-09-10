<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="panel-heading">
                <i class="fa fa-plus-circle"></i>  إضافة تصنيف جديد
            </div>
            <div class="col-sm-9 search-div">
                الكل( 
                    {{$allCategoriesCount}}
                )</a>
            </div> 
        </div>

		<!-------------- Left Side Content --------------->
        <div class="col-sm-4 cat-form">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading" style="background:#ae66150f;">
                    <i class="fa fa-plus-circle"></i> إضافة تصنيف
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="/categories">
                                @csrf
                                <div class="form-group">
                                    <label>اسم التصنيف</label>
                                    <input type="text" name="category_name" class="form-control" required 
                                        value="{{ old('category_name') }}"/>

                                    @error('category_name')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>				

                                <div class="form-group">
                                    <label>وصف التصنيف</label>
                                    <textarea class="form-control" name="category_description" rows="5" required>
                                        {{ old('category_description') }}
                                    </textarea>
                                    @error('category_description')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>

                                <!----------- Category Image Field ------------>
                                <div class="form-group">
                                    <label class="">صورة التصنيف
                                        <input type="file" class="form-control"
                                            name="category_image_location"/>
                                    </label>

                                    @error('category_image_location')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>

                                <div class="col-md-12 form-group">
                                    <button class="btn btn-success" name="submit_category">إضافة التصنيف</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		

		<!------------- Right Side Content -------------->

		<div class="col-sm-8 cat-view">
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-2">
				</div>
                <div class="col-sm-3  col-sm-offset-4">
                    <input type="text" id="search" name="search" class="form-control" placeholder="ابحث عن التصنيف بالاسم">
                </div>
			</div>

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
                        </tr>
                    </thead>
                    <!------------- Body of Table -------------->
                    <tbody>
                        @foreach ($categories as $category)
                            <tr @if($loop->odd) style="background:#ae66150f;border-radius:20px" @endif>
                                {{-- <td><input type="checkbox" name="select-cat"> </td> --}}
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->category_description}}</td>
                                <td>
                                    <img 
                                        src="{{$category->category_image_location ? 
                                        asset('storage/'.$category->category_image_location) :
                                        asset('/images/auction/cate1.png')}}"

                                        alt="image of {{$category->category_name}} category" width="200" />
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