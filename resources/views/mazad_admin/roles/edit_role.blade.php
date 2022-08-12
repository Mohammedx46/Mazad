<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="panel-heading">
                <i class="fa fa-plus-circle"></i>  تعديل صلاحية جديدة
            </div>
        </div>

		<!-------------- Left Side Content --------------->
        <div class="col-sm-4 cat-form">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-plus-circle"></i> تعديل صالحية
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="/roles/update/{{$role->id}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>اسم الصلاحية</label>
                                    <input type="text" name="role_name" class="form-control" required 
                                        value="{{$role->role_name}}"/>

                                    @error('role_name')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>				

                                <div class="form-group">
                                    <label>الصلاحيات</label>
                                    @foreach (config('global.Permissions') as $name => $value)
                                        <div class="form-group co-sm-4">
                                            <input type="checkbox" class="chk-box" name="permissions[]" value="{{$name}}" {{in_array($name, $role->permissions)? 'checked' : ''}} />  {{$value}}
                                        </div>
                                    @endforeach
                                    
                                    {{-- @error('category_description')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror --}}
                                </div>


                                <div class="col-md-12 form-group">
                                    <button class="btn btn-primary" name="submit_category">تعديل صلاحية</button>
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

								
            </div>
        </div>
    </div>
</x-admin-layout>