@extends('layout')

@section('title', 'Login')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <style>
        .c-error {    
            background: #c51244 !important;
            padding: 5px !important;
            border-radius: 11px;
            position: relative;
            display: inline-block !important;
            box-shadow: 1px 1px 1px #aaaaaa;
            margin-top: 10px;
            color: white;
            margin-top: 80px;
            width: 333px;
            margin-left: 21px;
        }
    </style>
@endsection

@section('content')
    <div class="login-div">
        @include('startupHeader')
        <div class="login-card-div">
            <div class="login-card-bg-div"></div>
            <div class="login-head-div">
                <div class="title-div1">Welcome to NORF’K</div>
                <div class="description-div2">
                    Please, enter your email address and password
                </div>
            </div>
            @if ($errors->any())
                <div class="c-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action='{{ route('authenticateUser') }}' class="login-details-form" method="post">
                @csrf
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
                <input type="submit" class="login-btn" value="Login"/>
            </form>
            <a href=""class="forgot-password">Forgot Password?</a>
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