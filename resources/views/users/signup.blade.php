<x-layout  :heading="$heading">
    <!-- ---------------------------------------- -->
    <!-- Second Section Sign Up   -->
    <!-- ---------------------------------------- -->
    <div class="signup-section pt-110 pb-110">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="right-form-area">
                        <div class="form-title">
                            <h3>إنشاء حساب</h3>
                        </div>
                        <form action="/users" method="POST" class="w-100" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label style="font-size:1.2em;">الاسم الأول</label>
                                        <input type="text" name="name" placeholder="الاسم الأول" required
                                            value="{{old('name')}}"/>
                                    </div>
                                    @error('name')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label style="font-size:1.2em;">اللقب</label>
                                        <input type="text" name="last_name" placeholder="اللقب"required
                                        value="{{old('last_name')}}"/>
                                    </div>
                                    @error('last_name')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label style="font-size:1.2em;">أدخل بريدك الإلكتروني</label>
                                        <input type="email" name="email" placeholder="أدخل بريدك الإلكتروني *"required
                                        value="{{old('email')}}"/>
                                    </div>
                                    @error('email')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label style="font-size:1.2em;">رقم الهاتف </label>
                                        <input type="text" name="phone_number" placeholder="رقم الهاتف : +967"required
                                        value="{{old('phone_number')}}"/>
                                    </div>
                                    @error('phone_number')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label style="font-size:1.2em;">كلمة السر</label>
                                        <input type="password" name="password" id="password" placeholder="إنشاء كلمة سر" required/>
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </div>
                                    @error('password')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label style="font-size:1.2em;">تأكيد كلمة السر</label>
                                        <input type="password" name="password_confirmation" id="passwordConfirmation" placeholder="تأكيد كلمة سر" required />
                                        <i class="bi bi-eye-slash" id="togglePasswordConfirmation"></i>
                                    </div>
                                    @error('password_confirmation')
                                        <div class="error-alert" role="alert"> {{$message}} </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label style="font-size:1.2em;">صورة لمفك الشخصي</label>
                                        <input type="file" class="form-control"
                                            name="user_image_location" required
                                            value="{{ old('user_image_location') }}"
                                        />
                                        @error('user_image_location')
                                            <div class="error-alert" role="alert"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap "
                                        >
                                        <div class="form-group">
                                            <input type="checkbox" id="html" value="true" name="is_confirm_terms" required>
                                            <label for="html" style="font-size: 1.05em">موافق على بنود الخصوصية</label>
                                            @error('is_confirm_terms')
                                                <div class="error-alert" role="alert"> {{$message}} </div>
                                            @enderror
                                        </div>
                                        <a href="/login" id="sign-reverse" style="font-size: 1.05em">  تسجيل الدخول ؟ </a>
                                    </div>
                                </div>
                            </div>
                            <button class="account-btn" >تسجيل</button>
                        </form>
                        {{-- <div class="alternate-signup-box">
                            <h6>أو إنشاء حساب عبر</h6>
                            <div class="btn-group gap-4">
                                <a href="#" class="eg-btn google-btn d-flex align-items-center"><i class='bx bxl-google'></i><span>إنشاء حساب عبر قوقل</span></a>
                                <a href="#" class="eg-btn facebook-btn d-flex align-items-center"><i class='bx bxl-facebook'></i>إنشاء حساب عبر فيس بوك</a>
                            </div>
                        </div> --}}
                        <div class="form-poicy-area" style="margin-top: 15px">
                            <p>عند الضغط على زر "تسجيل" فأنت موافق على <a href="#">قوانين وشروط منصة مزاد الإلكترونية</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>