<x-admin-layout>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 title">
                <h1><i class="fa fa-bars"></i> عرض بيانات المستخدمين </h1>
            </div>

            <div class="search-div">
                
                <div class="col-sm-9">
                    <a href="#"> الكل( 
                        {{$allUsersCount}}
                    )</a>
                </div>

                <div class="col-sm-3">
                    <input type="text" id="search" name="search" class="form-control" placeholder="ابحث عن مستخدم ب الاسم أو البريد الإلكتروني">
                </div>
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
                                <th width="10%">الاسم الأول</th>
                                <th width="10%"> اللقب </th>
                                <th width="15%">البريد الإلكتروني</th>
                                <th width="10%">رقم الهاتف</th>
                                <th width="5%">حالة</th>
                                <th width="10%">مبلغ التأمين</th>
                                <th width="5%">نوع الإشتراك</th>
                                <th width="15%">صورة المستخدم</th>
                                <th width="5%">هل يزايد</th>
                                <th width="10%">عملية </th>
                            </tr>
                        </thead>

                        <!----------------- Body of Table ----------------->
                        <tbody>
                            @unless ($users->isEmpty())
                                @foreach ($users as $user)
                                    <tr>
                                        {{-- <td><input type="checkbox" name="select-cat"> </td> --}}
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->user_status}}</td>
                                        <td>{{$user->insurance_amount}}</td>
                                        <td>{{$user->subscription_type}}</td>
                                        <td>
                                            <img 
                                                src="{{$user->user_image_location ? 
                                                asset('storage/'.$user->user_image_location) :
                                                asset('/images/auction/cate1.png')}}"    
                                                alt="{{$user->first_name}}الصورة الخاصة ب " height="80" /> 
                                        </td>
                                        <td>{{$user->is_bidding == 0 ? "لا" : "نعم"}}</td>
                                        <td>
                                            <a href="/users/{{$user->id}}/edit"
                                                class='btn btn-success'><i class="fa-solid fa-pen-to-square"></i> تعديل</a>
    
                                            <form method="POST" action="/users/{{$user->id}}" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button href="" class="btn btn-danger" > حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endunless
                        </tbody>
                        <!--------------- End Body of Table --------------->
                    </table>
                </div>
                {{ $users->links('adminPagination') }}
            </div>

            <div class="clearfix"></div>

            <!------------------------------------------------>
            <!---------------- bottom Content ---------------->
            <!------------------------------------------------>
        </div>
    </div>
    

</x-admin-layout>