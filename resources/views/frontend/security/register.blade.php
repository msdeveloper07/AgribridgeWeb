<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@section('insideHead')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/vendors.min.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/themes/bordered-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/themes/semi-dark-layout.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/pages/page-auth.css')}}">
<!-- END: Page CSS-->
@endsection

<!-- BEGIN: Head-->
@include('frontend.partials._html_head')
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">

                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('assets/app-assets/images/pages/login-v2.svg')}}" alt="Register" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1 text-center">Register to Agribridge</h2>
                                <!-- <p class="card-text mb-2">Make your app management easy and fun!</p> -->
                                <div class="text-center"><img src="{{asset('assets/app-assets/images/logo/logo-v1.svg')}}" width="140" class="img-fluid mx-auto my-2" alt=""></div>
                                <form class="auth-register-form mt-2" action="" method="POST" id="registerForm">
                                    <div class="mb-1">
                                        <label class="form-label" for="mobile_number">Mobile Number</label>
                                        <input class="form-control" id="mobile_number" type="text" name="mobile_number" placeholder="+919123456789" aria-describedby="register-username" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" id="email" type="text" name="email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="············" aria-describedby="register-password" tabindex="3" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="re-password">Confirm Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="re-password" type="password" name="re-password" placeholder="············" aria-describedby="register-password1" tabindex="3" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" id="register-privacy-policy" name="policy_status" type="checkbox" tabindex="4" />
                                            <label class="form-check-label" for="register-privacy-policy">I agree to<a href="#">&nbsp;privacy policy & terms</a></label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" tabindex="5">Sign up</button>
                                </form>
                                <p class="text-center mt-2"><span>Already have an account?</span><a href="{{route('login')}}"><span>&nbsp;Sign in instead</span></a></p>
                                <div class="divider my-2">
                                    <div class="divider-text">or</div>
                                </div>
                                <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="#"><i data-feather="twitter"></i></a><a class="btn btn-google" href="#"><i data-feather="mail"></i></a><a class="btn btn-github" href="#"><i data-feather="github"></i></a></div>
                            </div>
                        </div>
                        <!-- /Register-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets/app-assets/js/scripts/pages/page-auth-register.js')}}"></script>
    <!-- END: Page JS-->

    @include('frontend.partials._footer_script')

    <script>
        const rePassword = document.getElementById('re-password');
        const password = document.getElementById('password');
        let registerForm = document.getElementById('registerForm');
        registerForm.addEventListener("submit", (e) => {
            e.preventDefault()
            if (passwordCheck()) {
                let formData = new FormData(registerForm);
                console.log(formData);

                var ajaxReq = new XMLHttpRequest();
                ajaxReq.open("POST", "{{server_url().'api/v1/register'}}", true);
                ajaxReq.addEventListener("readystatechange", function() {
                    if (ajaxReq.readyState === 4 && ajaxReq.status === 200) {
                        final = JSON.parse(ajaxReq.responseText)
                        if (final.success == true) {
                            alert(final.message)
                            window.location.href = "{{route('login')}}"
                        } else {
                            alert(final.error)
                        }
                    }
                })
                ajaxReq.send(formData)
            }
        })

        // rePassword.addEventListener("keyup", () => {})
        function passwordCheck() {
            if (password.value == '') {
                alert("Please enter Password")
                return false
            } else if (rePassword.value == '') {
                alert("Please enter confirm password")
                return false
            } else if (password.value != rePassword.value) {
                alert("Password did not match: Please try again...")
                return false
            } else {
                return true;
            }
        }
    </script>
</body>
<!-- END: Body-->

</html>