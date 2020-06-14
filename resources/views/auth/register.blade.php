@extends('layout')
@section('title','Register')
@section('content')

<form class="login100-form validate-form" method="post" action="{{ route('register') }}">
    <span class="login100-form-title">
        New User Register
    </span>
    @csrf
    <div class="wrap-input100 validate-input" data-validate = "Valid name is required: Jon Doe">
        <input class="input100 form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
        @error('name')
            <span class="invalid-feedback"  role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Valid Username is required: Jon01">
        <input class="input100 form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" value="{{ old('username') }}" required autocomplete="username" autofocus>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100 form-control  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="new-password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Password Confirmation is required">
        <input class="input100 form-control " id="password-confirm" type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
       
    </div>
   
    
    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
        {{ __('Register') }}
        </button>
    </div>

    

    <div class="text-center p-t-136">
        <span class="txt1">Already register?</span>
        <a class="txt2" href="/login">
           Login
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </a>
    </div>
</form>

@endsection
