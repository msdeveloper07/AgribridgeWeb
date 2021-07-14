@extends('layouts.app')

@section('content')
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
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{ asset('resources/app-assets/images/pages/login-v2.svg') }}" alt="Register" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1 text-center">{{ __('Register to Agribridge')}}</h2>
                                <!-- <p class="card-text mb-2">Make your app management easy and fun!</p> -->
                                <div class="text-center"><img src="{{ asset('resources/app-assets/images/logo/logo-v1.svg') }}" width="140" class="img-fluid mx-auto my-2" alt=""></div>
                            <form method="POST" class="auth-register-form mt-2"  action="{{ route('register') }}">
                             @csrf
                              <div class="mb-1">
                                  <label class="form-label" for="name">{{ __('Fullname') }}</label>
                                
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete=" User name" autofocus placeholder="John doi" aria-describedby="name" autofocus="" tabindex="1">

                                @error('name')
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
                                   
                                 
                                <button type="submit" class="btn btn-primary w-100" tabindex="6">
                                  {{ __('Sign up') }}
                                </button>
                                </form>
                                <p class="text-center mt-2"><span>Already have an account?</span><a href="{{ route('login') }}"><span>&nbsp;Sign in instead</span></a></p>
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
@endsection
