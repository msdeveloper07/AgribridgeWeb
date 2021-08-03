<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@section('insideHead')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/vendors.min.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="{{asset('assets/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
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
                               <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{ asset('assets/app-assets/images/pages/login-v2.svg')}}" alt="Forgot password V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Reset password-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                               <div class="text-center"><img src="{{ asset('assets/app-assets/images/logo/logo-v1.svg')}}" width="140" class="img-fluid mx-auto my-2" alt=""></div>
                                <h2 class="card-title fw-bold mb-1 text-center">Reset Password</h2>
                                <p class="card-text mb-2 text-center">Your new password must be different from previously used passwords</p>
                        
                        <form class="auth-reset-password-form mt-2" id="resetPassword" action="" method="POST">
                             @csrf 
                             <input type="hidden" name="token" value="{{ $token }}">
                                                         
                            <div class="mb-1">
                               <div class="d-flex justify-content-between">
                                   <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus="" tabindex="1">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                                
                            </div>

                            <div class="mb-1">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">New Password</label>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                    

                                     <input id="password" type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" aria-describedby="new-password"autofocus="" tabindex="2">                             
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                  
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="password-confirm" placeholder="············" aria-describedby="password-confirm" tabindex="3">

                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" id="newPassword" tabindex="3">{{ __('Set New Password') }}</button>
                        </form>
                        <p id="alert-msg" class="text-center mt-2"> </p>
                        <p class="text-center mt-2"><a href="{{route('login')}}"><i data-feather="chevron-left"></i> Back to login</a></p>
                            </div>
                        </div>
                        <!-- /Reset password-->
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
      <script>   
         var requestUrl = "http://localhost/riverbridgeVenturesapp/api/v1/change-password"; 
         $('#resetPassword').on('submit',function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#newPassword').html('Please Wait...');
            $("#newPassword"). attr("disabled", true);
            $( "#alert-msg" ).empty();
            $.ajax({
                    url: requestUrl,
                    type: "POST",
                    data: $('#resetPassword').serialize(),
                    success: function( response ){ 
                    console.log(response);
                    var result = response.message;
                    var error = response.error;
                    var success = response.success;                

                    if(success == true){
                    setTimeout(function() {
                       $('#newPassword').html('Submit');
                       $("#newPassword"). attr("disabled", false);
                        $('#alert-msg').html(result);
                    }, 5000);

                    setTimeout(function() {
                        $( "#alert-msg" ).empty();
                    }, 10000);
                    document.getElementById("resetPassword").reset(); 
                    
                    
                }else{

                    setTimeout(function() {
                        $('#newPassword').html('Submit');
                        $("#newPassword"). attr("disabled", false);
                        $('#alert-msg').html(error);
                    }, 5000);

                    setTimeout(function() {
                        $( "#alert-msg" ).empty();
                    }, 10000);
                   
                }
                
                }
            });


        });      
      </script>
</body>
<!-- END: Body-->

</html>


