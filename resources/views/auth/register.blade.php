@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(img/product-finder-background-image.jpg);">
                    <span class="login100-form-title-1">
                       {{ __('Register') }}
                    </span>
                </div>

              
                    <form class="login100-form validate-form"method="POST" action="{{ route('register') }}">
                        @csrf


                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                         <label class="label-input100" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                          <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                         <label class="label-input100" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                    </div>



                     <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                         <label class="label-input100" for="email" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                           <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                     <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                         <label class="label-input100" for="email" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                           <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">

                               
                    </div>

                    

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                           {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                           
@endsection
