<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="panel-heading">
                <i class="fa fa-plus-circle"></i>  إضافة تصنيف جديد
            </div>
            <div class="search-div">الكل ( 5 ) </div>  
        </div>

		<!-------------- Left Side Content --------------->
        <div class="col-sm-4 cat-form">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
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
                                {{-- <div class="form-group">
                                    <label class="">صورة التصنيف
                                        <input type="file" class="form-control"
                                            name="category_image_location"
                                            value="{{ old('category_image_location') }}"/>
                                    </label>
                                    @error('category_image_location')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                    <div class="col-md-6 form-group"><img src="h.png" alt="" /></div>
                                </div> --}}

                                <div class="col-md-12 form-group">
                                    <button class="btn btn-primary" name="submit_category">إضافة التصنيف</button>
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
                            <th width="5%"><input type="checkbox" id="select-all"></th>
                            <th width="15%">اسم التصنيف</th>
                            <th width="60%">وصف التصنيف</th>
                            <td width="20%">العملية</td>
                        </tr>
                    </thead>
                    <!------------- Body of Table -------------->
                    <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" name="select-cat"> 
                            </td>
                            <td></td>
                            <td></td>	
                            <td>
                                <a href=""
                                    class='btn btn-success'>تعديل</a>
                                <a href="" class='btn btn-danger'
                                    id="delet">حذف</a>
                            </td>														
                        </tr>
                        
                    </tbody>
                </table>
            </div> 						
            </div>
        </div>
    </div>
</x-admin-layout>