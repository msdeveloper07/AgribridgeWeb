<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('public/assets/app-assets/images/pages/login-v2.svg')}}" alt="Register" /></div>
                     </div>
                     <!-- /Left Text-->
                     <!-- Register-->
                     <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                           <h2 class="card-title fw-bold mb-1 text-center">Register to Agribridge</h2>
                           <!-- <p class="card-text mb-2">Make your app management easy and fun!</p> -->
                           <div class="text-center"><img src="{{asset('public/assets/app-assets/images/logo/logo-v1.svg')}}" width="140" class="img-fluid mx-auto my-2" alt=""></div>
                         
                           <form name="registerForm" class="auth-register-form mt-2"   id="registerForm" method="post" action="javascript:void(0)">
                            @csrf
                            <div class="mb-1">
                                <label class="form-label" for="user_name">{{ __('Full Name') }}</label>
                                <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete=" User name" autofocus placeholder="John doi" aria-describedby="user_name" autofocus="" tabindex="1">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            <div class="mb-1">
                                 <label class="form-label" for="user_type">{{ __('User Type') }}</label>
                                 <select class="form-select  @error('user_type') is-invalid @enderror" id="user_type" name="user_type" tabindex="2">
                                 <option value="1">Farmer Producer Organization</option>
                                 <option value="2">Cluster Management Company</option>
                                 <option value="3">Private Organization</option>
                                 <option value="4">Individual Farmer</option>
                                 </select>                                                          
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="register_company">{{ __('Company Name') }}</label>
                                <input class="form-control @error('register_company') is-invalid @enderror" id="register_company" type="text" name="register_company" value="{{ old('register_company') }}" placeholder="Company" aria-describedby="register_company" autofocus="" tabindex="3" />

                                @error('register_company')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                             </div>
                             <div class="mb-1">
                                <label class="form-label" for="Designation">{{ __('Designation') }}</label>
                                <input class="form-control @error('designation') is-invalid @enderror" id="designation" type="text" name="designation" value="{{ old('designation') }}" placeholder="Designation" aria-describedby="designation" autofocus="" tabindex="4" />

                                @error('designation')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="mobile_number">{{ __('Mobile Number') }}</label>
                                <input class="form-control @error('mobile_number') is-invalid @enderror" id="mobile_number" type="text" name="mobile_number" value="{{ old('mobile_number') }}" placeholder="+919123456789" aria-describedby="mobile_number" autofocus="" tabindex="5" />

                                @error('mobile_number')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>                          
                            <div class="mb-1">
                                <label class="form-label" for="register-email">{{ __('Email')}}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="john@example.com" aria-describedby="register-email" tabindex="3" > 
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="register-password">{{ __('Password')}}</label>
                                <div class="input-group input-group-merge form-password-toggle">
                                <input id="password" type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="············" aria-describedby="register-password" tabindex="4">
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                            <label class="form-label" for="register-password1">{{ __('Confirm Password') }}</label>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input id="password-confirm" type="password" class="form-control form-control-merge" name="password_confirmation" required autocomplete="new-password" placeholder="············" aria-describedby="register-password1" tabindex="5" >
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                            </div>
                            <div class="mb-1">
                              <div class="form-check">
                                 <input class="form-check-input" id="register-privacy-policy" type="checkbox" name="privacyPolicy" tabindex="4" />
                                 <label class="form-check-label" for="register-privacy-policy">{{ __('I agree to')}}<a href="#">&nbsp;{{ __('privacy policy & terms')}}</a></label>
                              </div>
                           </div>

                           <button class="btn btn-primary w-100" id="registerFormBtn" tabindex="5">{{ __('Sign up')}}</button>
                           
                        </form>
                        <p id="alert-msg" class="text-center mt-2"> </p>
                           <p class="text-center mt-2"><span>Already have an account?</span><a href="#"><span>&nbsp;Sign in instead</span></a></p>
                           <div class="divider my-2">
                              <div class="divider-text">or</div>
                           </div>
                           <div class="auth-footer-btn d-flex justify-content-center">
                            <a class="btn btn-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-google" href="#"><i class="fab fa-google"></i></a>
                           </div>

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
      <script src="{{asset('public/assets/app-assets/js/scripts/pages/page-auth-register.js')}}"></script>
      <!-- END: Page JS-->
      @include('frontend.partials._footer_script')
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
      <script>     

         var requestUrl = "{{server_url().'api/v1/register'}}"; 
         $('#registerForm').on('submit',function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#registerFormBtn').html('Please Wait...');
            $("#registerFormBtn"). attr("disabled", true);
            $( "#alert-msg" ).empty();
            $.ajax({
                    url: requestUrl,
                    type: "POST",
                    data: $('#registerForm').serialize(),
                    success: function( response ) {
                    var result = response.message;
                    $('#registerFormBtn').html('Submit');
                    $("#registerFormBtn"). attr("disabled", false);
                    $('#alert-msg').html(result);
                    setTimeout(function() {
                        $( "#alert-msg" ).empty();
                    }, 5000);
                    
                    document.getElementById("registerForm").reset(); 
                }
            });

        });      

      </script>
   </body>
   <!-- END: Body-->
</html>