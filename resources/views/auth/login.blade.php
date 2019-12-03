@extends('layouts.app')

@section('content')
<div class="container">

             <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(img/product-finder-background-image.jpg);">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>

                 <form class="login100-form validate-form"method="POST" action="{{ route('login') }}">
                        @csrf


                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                       <label class="label-input100" for="email" >{{ __('E-Mail Address') }}</label>
                         <input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                         <label class="label-input100" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                     
                      <input class="input100" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                       @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>

                    

                    <div class="container-login100-form-btn">
                         <button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                                </button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

        
@endsection
