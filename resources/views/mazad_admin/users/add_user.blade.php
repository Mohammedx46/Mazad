<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 title">
                <h1><i class="fa fa-bars"></i> إضافة بيانات مستخدم جديد</h1>
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

                                        <form role="form" method="POST" action="/users" enctype="multipart/form-data">
                                            @csrf
                                            <!-------------- Left Side --------------->
                                            <div class="col-md-6 form-group">

                                                <!-------------- First Name Field --------------->                                    
                                                <label class="labelAdd col-md-12" id="m">الاسم الأول
                                                    <input type="text" placeholder="أكتب اسمك الأول"
                                                        class="form-control" name="first_name" required
                                                        value="{{old('first_name')}}"/> 

                                                    @error('first_name')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label> 
                                                
                                                <!-------------- Privilege Field ---------------> 
                                                <label class="labelAdd col-md-4"> نوع الإشتراك
                                                    <select class="form-control" name="subscription_type" required> 
                                                        <option value="0">زائر</option>
                                                        <option value="0">أساسي</option>
                                                        <option value="0">مميز</option>
                                                    </select>   
                                                    @error('subscription_type')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label> 
                                                <!-------------- Password Field --------------->  
                                                <label class="labelAdd col-md-8">كلمة المرور
                                                    <input type="password" class="form-control"
                                                        placeholder="أدخل كلمة السر" name="password" required/>   
                                                    @error('password')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror                                     
                                                </label>
                                                <!-------------- Phone Number Field ----------->
                                                <label  class="labelAdd col-md-12">رقم الهاتف
                                                    <input type="text" class="form-control"
                                                        placeholder="أكتب رقم الهاتف 77 , 73 , 71 , 71" name="phone_number" required
                                                        value="{{old('phone_number')}}"/>
                                                    @error('phone_number')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>
                                                <!-------------- Activation Field ---------->
                                                <label class="labelAdd col-md-4">حالة المستخدم
                                                    <select class="form-control" name="user_status" required>
                                                        <optgroup>نشط</optgroup>
                                                        <option value = "1">نشط     </option>
                                                        <option value = "0">معطل    </option>
                                                    </select>  
                                                    @error('user_status')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror                                          
                                                </label> 
                                                <!-------------- User Field ---------------> 
                                                <label class="labelAdd col-md-8">الصورة لملفك  الشخصي
                                                    <input type="file" class="form-control"
                                                        name="user_image_location" required
                                                        value="{{ old('user_image_location') }}"
                                                    />
                                                    @error('user_image_location')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>
                                            </div>
                                        
                                            <!----------------------------------------->
                                            <!-------------- Right Side --------------->
                                            <!----------------------------------------->

                                            <div class="col-md-6 form-group">
                                                <!------------ Last Name Field ------------->                                   
                                                <label class="labelAdd col-md-12" id="m">اللقب
                                                    <input type="text" placeholder="أكتب اسمك الأخير"
                                                        class="form-control" name="last_name" required
                                                        value="{{old('last_name')}}"/>   
                                                    @error('last_name')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label> 

                                                <!------------- Confirm Password Field -----> 
                                                <label class="labelAdd col-md-12">تأكيد كلمة المرور
                                                    <input type="password" class="form-control"
                                                        placeholder="أكتب لكمة المرور مرة أخرى" 
                                                        name="password_confirmation" required/>
                                                    @error('password_confirmation')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label>

                                                <!-------------- Email Field --------------->                                                                         
                                                <label  class="labelAdd col-md-12">البريد الإلكتروني
                                                    <input type="email" class="form-control"
                                                        placeholder="أكتب بريدك الإلكتروني" name="email" required
                                                        value="{{old('email')}}"/>
                                                    @error('email')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror
                                                </label> 
                                                
                                                <label class="labelAdd col-md-4">صلاحية المتسخدم
                                                    <select class="form-control" name="role_id" required>
                                                        <optgroup>نشط</optgroup>
                                                        @foreach ($roles as $role)
                                                            <option value="{{$role->id}}">{{$role->role_name}}</option>
                                                        @endforeach
                                                    </select>  
                                                    @error('role_id')
                                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                                    @enderror                                          
                                                </label> 
                                            </div>

                                            <div class="form-group col-md-12">                                                
                                                <label class='col-md-12'></label>
                                                    <!-------------- Buttons Field ------------>
                                                    <div style="float:right;">
                                                        <button type="submit" name ="submit" class="btn btn-primary">إضافة المستخدم</button>
                                                        <button type="reset" class="btn btn-danger">إلغاء</button>
                                                    </div>
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