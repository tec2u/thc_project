@extends('layouts.app')
@section('content')
@include('flash::message')

<div id="loginform" class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-48">
                    <img class="imagetest" src="{{asset('images/nolimitslogo.png')}}" alt="">
                </span>
                <h4 class="title-login my-3">{{ __('Login') }}</h4>
                <div class="wrap-input100 validate-input">

                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100" data-placeholder="Email"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="btn-show-password">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span class="focus-input100" data-placeholder="Password"></span>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="contact100-form-checkbox">
                    <div class="input100">
                        <input class="form-check-input checkcheck" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label remember-title" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn "></div>
                        <button type="submit" class="login100-form-btn btn btn-primary rounded-pill">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="text-center p-t-115 mt-40">
                        @if (Route::has('password.request'))
                        <a class="txt2" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
                <div class="text-center p-t-115">
                    <span class="txt1">
                        Don’t have an account?
                    </span>

                    <a class="txt2" href="{{ route('register') }}">
                        Sign Up
                    </a>
                </div>
                <div class="text-center p-t-115 mt-40">
                    <a class="txt2" href="https://phpstack-938220-3402762.cloudwaysapps.com/disclaimer-2/">
                        Disclaimer
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#flash-overlay-modal').modal();
</script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>

<script>
    (function($) {
        "use strict";


        /*==================================================================
        [ Focus input ]*/
        $('.input100').each(function() {
            $(this).on('blur', function() {
                if ($(this).val().trim() != "") {
                    $(this).addClass('has-val');
                } else {
                    $(this).removeClass('has-val');
                }
            })
        })

        /*==================================================================
        [ Show pass ]*/
        var showPass = 0;
        $('.btn-show-password').on('click', function() {
            if (showPass == 0) {
                $(this).next('input').attr('type', 'text');
                $(this).find('i').removeClass('fa-eye');
                $(this).find('i').addClass('fa-eye-slash');
                showPass = 1;
            } else {
                $(this).next('input').attr('type', 'password');
                $(this).find('i').addClass('fa-eye');
                $(this).find('i').removeClass('fa-eye-slash');
                showPass = 0;
            }

        });
    })(jQuery);
</script>
@endsection
