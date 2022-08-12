<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="panel-heading">
                <i class="fa fa-plus-circle"></i>  إضافة صلاحية جديدة
            </div>
            <div class="col-sm-9 search-div">
                الكل( 
                    {{$allRolesCount}}
                )</a>
            </div> 
        </div>

		<!-------------- Left Side Content --------------->
        <div class="col-sm-4 cat-form">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-plus-circle"></i> إضافة صالحية
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="/roles/store" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>اسم الصلاحية</label>
                                    <input type="text" name="role_name" class="form-control" required 
                                        value="{{ old('role_name') }}"/>

                                    @error('role_name')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>				

                                <div class="form-group">
                                    <label>الصلاحيات</label>
                                    @foreach (config('global.Permissions') as $name => $value)
                                        <div class="form-group co-sm-4">
                                            <input type="checkbox" class="chk-box" name="permissions[]" value="{{$name}}"> {{$value}}
                                        </div>
                                    @endforeach
                                    
                                    {{-- @error('category_description')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror --}}
                                </div>


                                <div class="col-md-12 form-group">
                                    <button class="btn btn-primary" name="submit_category">إضافة صلاحية</button>
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
                            <th width="10%">اسم الصلاحية</th>
                            <th width="40%">الصلاحيات</th>
                            <th width="15%">العملية</th>
                        </tr>
                    </thead>
                    <!------------- Body of Table -------------->
                    <tbody>
                        @isset($roles)
                                @foreach ($roles  as $role)
                                    <tr>
                                        {{-- <td><input type="checkbox" name="select-cat"> </td> --}}
                                        <td>{{$role->role_name}}</td>
                                        <td>
                                            @foreach ($role->permissions as $permission)
                                                {{ $permission }}	, 
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="/categories/{{$role->id}}/edit"
                                                class='btn btn-success'><i class="fa-solid fa-pen-to-square"></i> تعديل</a>

                                            <form method="POST" action="/categories/{{$role->id}}" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button href="" class="btn btn-danger" >حذف</button>
                                            </form>
                                        </td>														
                                    </tr>
                                @endforeach
                            @endisset
                    </tbody>
                </table>
            </div> 	
            {{ $roles->links('adminPagination') }}						
            </div>
        </div>
    </div>
</x-admin-layout>