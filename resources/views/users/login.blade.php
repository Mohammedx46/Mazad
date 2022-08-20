<x-layout  :heading="$heading">
    <!-- ---------------------------------------- -->
    <!-- Second Section Log In     -->
    <!-- ---------------------------------------- -->
    <div class="login-section pt-110 pb-110">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="right-form-area">
                        <div class="form-title">
                            <h3>تسجيل الدخول</h3>
                        </div>
                        <form class="w-100" method="POST" action="/users/authenticate">
                            @csrf
                            <div class="row">
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

                                <div class="col-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <!-- <input type="checkbox" id="html"> -->
                                            <label for="html"><a href="/signup" id="sign-reverse">إنشاء حساب ؟</a>
                                            </label>
                                        </div>
                                        <a href="#" class="forgot-pass">نسيت كلمة السر</a>
                                    </div>
                                </div>
                            </div>
                            <button class="account-btn">تسجيل</button>
                        </form>
                        {{-- <div class="alternate-signup-box">
                            <h6>أو إنشاء حساب عبر</h6>
                            <div class="btn-group gap-4">
                                <a href="#" class="eg-btn google-btn d-flex align-items-center"><i class='bx bxl-google'></i><span>إنشاء حساب عبر قوقل</span></a>
                                <a href="#" class="eg-btn facebook-btn d-flex align-items-center"><i class='bx bxl-facebook'></i>إنشاء حساب عبر فيس بوك</a>
                            </div>
                        </div> --}}
                        <div class="form-poicy-area">
                            <p>عند الضغط على زر "تسجيل" فأنت موافق على <a href="#">قوانين وشروط منصة مزاد الإلكترونية</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>