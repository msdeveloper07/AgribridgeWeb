<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                         
                        <form class="auth-register-form mt-2"   id="regForm" method="post" action="#">
                            @csrf
                            <div class="mb-1">
                                <label class="form-label" for="user_name">{{ __('Full Name') }}</label>
                                <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}"  autocomplete=" User name" autofocus placeholder="John doi" aria-describedby="user_name" autofocus="" tabindex="1">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            <div class="mb-1">
                                 <label class="form-label" for="user_type">{{ __('User Type') }}</label>
                                 <select class="form-select  @error('user_type') is-invalid @enderror" id="user_type" name="user_type" tabindex="2">

                                 <option selected value="" disabled>Select user type</option>
                                 <option value="Farmer Producer Organization">Farmer Producer Organization</option>
                                 <option value="Cluster Management Company">Cluster Management Company</option>
                                 <option value="Private Organization">Private Organization</option>
                                 <option value="Individual Farmer">Individual Farmer</option>
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

                                <input class="form-control @error('mobile_number') is-invalid @enderror" id="mobile_number" type="tel" name="mobile_number" value="{{ old('mobile_number') }}" aria-describedby="mobile_number" autofocus="" tabindex="5" />


                                @error('mobile_number')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>                          
                            <div class="mb-1">
                                <label class="form-label" for="register-email">{{ __('Email')}}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="john@example.com" aria-describedby="register-email" tabindex="3" > 

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="register-password">{{ __('Password')}}</label>
                                <div class="input-group input-group-merge form-password-toggle">

                                <input id="password" type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="············" aria-describedby="register-password" tabindex="4">
                                <span class="input-group-text cursor-pointer" id="togglePassword"><i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i></span>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                         
                            <div class="mb-1">
                              <div class="form-check">
                                 <input class="form-check-input" id="register-privacy-policy" type="checkbox" name="privacyPolicy" tabindex="4" />
                                 <label class="form-check-label" for="register-privacy-policy">{{ __('I agree to')}}<a href="#">&nbsp;{{ __('privacy policy & terms')}}</a></label>
                              </div>
                           </div>


                           <button type="submit" class="btn btn-primary w-100" id="registerFormBtn" tabindex="5">{{ __('Sign up')}}</button>
                                                      
                        </form>
                        <p id="alert-msg" class="text-center mt-2"> </p>
                           <p class="text-center mt-2"><span>Already have an account?</span><a href="{{route('login')}}"><span>&nbsp;Sign in instead</span></a></p>

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
   
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets/app-assets/js/scripts/pages/page-auth-register.js')}}"></script>
    <!-- END: Page JS-->
      <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>   
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>     
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
      @include('frontend.partials._footer_script')     
      
      <script>
         
          
          function viewPassword()
            {
                const passwordInput = document.getElementById('password');
                const passStatus = document.getElementById('pass-status');
            
            if (passwordInput.type == 'password'){
                passwordInput.type='text';
                passStatus.className='fa fa-eye-slash';
                
            }
            else{
                passwordInput.type='password';
                passStatus.className='fa fa-eye';
            }
            }
           

        const phoneInputField = document.querySelector("#mobile_number");
        const phoneInput = window.intlTelInput(phoneInputField, {
            initialCountry: "in",
            utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
        const value = $("#password").val();
        $.validator.addMethod("checklower", function(value) {
        return /[a-z]/.test(value);
        });
        $.validator.addMethod("checkupper", function(value) {
        return /[A-Z]/.test(value);
        });
        $.validator.addMethod("checkdigit", function(value) {
        return /[0-9]/.test(value);
        });
        $.validator.addMethod("pwcheck", function(value) {
        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value) && /[A-Z]/.test(value);
        });
        
       $("#regForm").validate({
        rules:{
         user_name: {
                        required: true,
                        maxlength: 30,
                    },
                    user_type:{
                        required: true,
                    },
                    register_company:{
                        required: true,
                        maxlength: 20,
                    },
                    designation:{
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    mobile_number: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true,
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        checklower: true,
                        checkupper: true,
                        checkdigit: true,
                    },                    
                    privacyPolicy:{
                          required: true,
                    },

        },

        messages: {
         user_name: {
                        required: "User name is required",
                        maxlength: "User name cannot be more than 30 characters",
                    },                    
                    email: {
                        required: "Email is required",
                        email: "Email must be a valid email address",
                    },
                    mobile_number: {
                        required: "Phone number is required",
                        minlength: "Phone number must be of 10 digits",
                    },
                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 8 characters",
                        checklower: "Your password must contain at least one lowercase letter.",
                        checkupper: "Your password must contain at least one uppercase letter.",
                        checkdigit: "Your password must contain at least one digit."
                    },                    
                    privacyPolicy:{
                        required:  "Checked Provacy policy checkbox",

                    },
                    designation:{
                        required:  "Designation is required",
                    },
                    register_company:{
                        required:  "Company name is required",
                        maxlength: "Company name cannot be more than 20 characters",
                    },
                    user_type:{
                        required:  "Please select user type",
                    }, 
             },

            submitHandler: function(form){
                const requestUrl = "http://localhost/riverbridgeVenturesapp/api/v1/register";               
                  $.ajaxSetup({
                     headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                  });
                  const countryCode = $(".iti__selected-flag").attr('title');
                  const code = countryCode.split(':');

                  const cod = code[1];

                  const formData = $('#regForm').serialize() + '&countryCode=' + cod;
                  //console.log(data);
                  $('#registerFormBtn').html('Please Wait...');
                  $("#registerFormBtn"). attr("disabled", true);
                  $( "#alert-msg" ).empty();
                  
            $.ajax({
               url: requestUrl,
                    type: "POST",
                    data: formData,
                    success: function( response ) {
                      //console.log(response);
                      const result = response.message;
                      const error = response.error;
                      const success = response.success;
                    if(success == true){
                    setTimeout(function() {
                        $('#registerFormBtn').html('Submit');
                        $("#registerFormBtn"). attr("disabled", false);
                        $('#alert-msg').html(result);
                    }, 5000);

                    setTimeout(function() {
                        $( "#alert-msg" ).empty();
                        window.location.href = "/login";

                    }, 10000);
                    document.getElementById("regForm").reset(); 
                }else{

                    setTimeout(function() {
                        $('#registerFormBtn').html('Submit');
                        $("#registerFormBtn"). attr("disabled", false);
                        $('#alert-msg').html(error);
                    }, 5000);

                    setTimeout(function() {
                        $( "#alert-msg" ).empty();
                    }, 10000);
                }
                    
                }            
               });   
            }
        });
         
        
    </script>     

   </body>
   <!-- END: Body-->
</html>