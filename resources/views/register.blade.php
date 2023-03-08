@extends('layout')

@section('title', 'Register')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
    <div class="login-div">
        @include('startupHeader')
        <div class="login-card-div">
            <div class="login-card-bg-div"></div>
            <div class="login-head-div">
                <div class="title-div1">Welcome to NORF’K</div>
                <div class="description-div2">
                    Please, enter required information
                </div>
            </div>
            <form action='{{ route('registerUser') }}' class="login-details-form" method="post">
                @csrf
                <div class="email-div" style="display: none;">
                    <input class="input-email" type="text" name="name" value="-" />
                    <label class="label-email" htmlfor="email">Name</label>
                </div>
                <div class="email-div">
                    <input class="input-email" type="email" name="email" required />
                    <label class="label-email" htmlfor="email">Email Address</label>
                </div>
                <div class="password-div">
                    <input class="input-password" type="password" name="password" required />
                    <label class="label-password" htmlfor="password">Password</label>
                </div>
                <div class="remember-me-div">
                    <input type="checkbox" name="rememberMe" class="input-remember-me-div"/>
                    <label class="label-remember-me" htmlfor="rememberMe">Remember me</label>
                </div>
                <input type="submit" class="login-btn" value="Sign Up"/>
            </form>
            <a href=""class="google-a">
                <div class="google-login-div"></div>
                <div class="google-text-div">
                    <div class="continue-with-google">Continue with Google</div>
                    <img class="flat-color-iconsgoogle" alt="" src={{ asset('img/flatcoloriconsgoogle.svg') }} />
                </div>
            </a>
            <a href=""class="facebook">
                <div class="facebook-login-div"></div>
                <div class="continue-with-facebook">Continue with facebook</div>
            </a>
        </div>
    </div>
@endsection