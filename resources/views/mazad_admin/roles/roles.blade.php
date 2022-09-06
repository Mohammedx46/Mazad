<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 title">
                <h1><i class="fa fa-bars"></i> عرض بيانات الصلاحيات </h1>
            </div>

            <div class="col-sm-12">
                <div class="col-sm-8 search-div">
                    الكل( 
                        {{$allRolesCount}}
                    )</a>
                </div>

                <x-admin.search target="/roles" placeholder="ابحث عن الصلاحية بالاسم" />
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
                                <th width="10%">اسم الصلاحية</th>
                                <th width="40%">الصلاحيات</th>
                                <th width="15%">العملية</th>
                            </tr>
                        </thead>
                        <!------------- Body of Table -------------->
                        <tbody>
                            @isset($roles)
                                @foreach ($roles  as $role)
                                    <tr @if($loop->odd) style="background:#ae66150f;border-radius:20px" @endif>
                                        {{-- <td><input type="checkbox" name="select-cat"> </td> --}}
                                        <td>{{$role->role_name}}</td>
                                        <td>
                                            @foreach ($role->permissions as $permission)
                                                {{ $permission }}	, 
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="/roles/{{$role->id}}/edit"
                                                class='btn btn-success'><i class="fa-solid fa-pen-to-square"></i> تعديل</a>

                                            <form method="POST" action="/roles/{{$role->id}}" style="display: inline-block">
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

    <script src="{{ mix('js/app.js') }}"></script>
</x-admin-layout>