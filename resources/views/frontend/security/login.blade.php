<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@section('insideHead')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/vendors/css/vendors.min.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="{{asset('public/assets/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/themes/bordered-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/themes/semi-dark-layout.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/app-assets/css/pages/page-auth.css')}}">
<!-- END: Page CSS-->
@endsection

<!-- BEGIN: Head-->
@include('frontend.partials._html_head')
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">

                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{asset('public/assets/app-assets/images/pages/login-v2.svg')}}" class="img-fluid d-block w-100" alt="cf-img-1" />
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('public/assets/app-assets/images/slider/02.jpg')}}" class="img-fluid d-block w-100" alt="cf-img-2" />
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('public/assets/app-assets/images/pages/login-v2.svg')}}" class="img-fluid d-block w-100" alt="cf-img-1" />
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <div class="text-center"><img src="{{asset('public/assets/app-assets/images/logo/logo-v1.svg')}}" width="140" class="img-fluid mx-auto my-2" alt=""></div>
                                <h2 class="card-title fw-bold mb-1 text-center">Login to Agribridge</h2>
                                <!-- <p class="card-text mb-2">Please sign-in to your account and start the adventure</p> -->
                                <form method="POST" class="auth-login-form mt-2" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-1">
                                    <label class="form-label" for="login-email">{{ __('Email') }}</label>
                                    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="john@example.com" aria-describedby="login-email" tabindex="1" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="login-password">{{ __('Password') }}</label>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"><small>
                                        {{ __('Forgot Your Password?') }}</small>
                                        </a>
                                        @endif
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input id="password" type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="············" aria-describedby="login-password" tabindex="2">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} tabindex="3">
                                        <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100" tabindex="4">
                                {{ __('Sign in') }}
                                </button>
                                </form>
                                <p class="text-center mt-2"><span>New on our platform?</span><a href="{{route('register')}}"><span>&nbsp;Create an account</span></a></p>
                                <div class="divider my-2">
                                    <div class="divider-text">or</div>
                                </div>
                                <div class="auth-footer-btn d-flex justify-content-center">
                                    <a class="btn btn-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-google" href="#"><i class="fab fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Login-->
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
    <script src="{{asset('assets/app-assets/js/scripts/pages/page-auth-login.js')}}"></script>
    <!-- END: Page JS-->

    @include('frontend.partials._footer_script')

</body>
<!-- END: Body-->

</html>