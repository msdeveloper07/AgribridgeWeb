<<<<<<< HEAD
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

                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{ asset('public/assets/app-assets/images/pages/login-v2.svg')}}" alt="Forgot password V2" /></div>

                        <!-- /Left Text-->
                        <!-- Forgot password-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">

                                <div class="text-center"><img src="{{ asset('public/assets/app-assets/images/logo/logo-v1.svg')}}" width="140" class="img-fluid mx-auto my-2" alt=""></div>

                                <h2 class="card-title fw-bold mb-1 text-center">{{ __('Forgot Password?')}}</h2>
                                <p class="card-text mb-2 text-center">{{ __('Enter your email and we will send you instructions to reset your password')}}</p>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                    <form class="auth-forgot-password-form mt-2" action="" method="POST">

                                     @csrf
                            <div class="mb-1">
                               <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="john@example.com" aria-describedby="email" autofocus="" tabindex="1">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="2" type="submit">Send reset link</button>
                                </form>
                                <p class="text-center mt-2"><a href="{{ route('login') }}"><i data-feather="chevron-left"></i> Back to login</a></p>
                            </div>
                        </div>
                        <!-- /Forgot password-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

 <!-- BEGIN: Vendor JS-->
 <script src="{{asset('public/assets/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('public/assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('public/assets/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('public/assets/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('public/assets/app-assets/js/scripts/pages/page-auth-login.js')}}"></script>
    <!-- END: Page JS-->

    @include('frontend.partials._footer_script')
  
</body>
<!-- END: Body-->

</html>

