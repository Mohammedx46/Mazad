<x-layout :heading="$heading">

    <!-- ---------------------------------------- -->
    <!-- Second Section Contact Us  -->
    <!-- ---------------------------------------- -->
    <div class="contact-section pt-110 pb-110">
        <div class="container">
            <!-- ---------------------------------------- -->
            <!-- Contact Us Methods  -->
            <div class="row pb-120 mb-70 g-4 d-flex justify-content-center">
                <!-- ---------------------------------------- -->
                <!-- Location Contact Us  -->
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="eg-card contact-signle">
                        <div class="icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="text">
                            <h4>الموقع</h4>
                            <p>مذبح, صنعاء, اليمن</p>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------- -->
                <!-- Phone Contact Us  -->
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="contact-signle">
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <div class="text">
                            <h4>هاتف</h4>
                            <a href="tel:+967770047103 ">
                                <h5>+967 770 047 103</h5>
                            </a>
                            <a href="tel:+96774814450">
                                <h6>+967 774 814 450</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------- -->
                <!-- Email Contact Us  -->
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="contact-signle">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <div class="text">
                            <h4>البريد الإلكتروني</h4>
                            <a href="https://mail.google.com/mail/u/0/?tab=km#inbox">
                                <h5><span class="__cf_email__" data-cfemail="91e2e4e1e1fee3e5d1f4e9f0fce1fdf4bff2fefc">[البريد الإلكتروني&#160;محمي]</span></h5>
                            </a>
                            <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#630a0d050c23061b020e130f064d000c0e">
                                <h6><span class="__cf_email__" data-cfemail="c8a1a6aea788adb0a9a5b8a4ade6aba7a5">[البريد الإلكتروني&#160;محمي]</span></h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ---------------------------------------- -->
            <!-- Contact Us Direct Email  -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="section-title3">
                        <h3>هل لديك سؤال؟ تواصل معنا!</h3>
                        <p>عيب عليك تواصل معنا لا تستحي نحن خبره</p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="contact-form-wrap">
                        <form class="contact-form" action="/contacts/create" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>اسمك الكامل</label>
                                        <input type="text" placeholder="أكتب اسمك" name="user_name" required
                                        value="{{old('user_name')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>بريد الإلكتروني</label>
                                        <input type="text" placeholder="أكتب بريدك الإلكتروني" name="email" required
                                        value="{{old('email')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>الموضوع</label>
                                        <input type="text" name="topic" placeholder="الموضوع" required
                                            value="{{old('topic')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>رسالتك</label>
                                        <textarea placeholder="أكتب رسالتك هنا" name="user_message" rows="5" required>
                                            {{old('user_message')}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button  class="eg-btn btn--fill-primary contact-btn"><span>إرسل الرسالة</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>