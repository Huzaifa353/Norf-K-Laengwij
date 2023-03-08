@extends('layout')

@section('title', 'Login')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/courseIsReady.css') }}" />
@endsection

@section('content')
    <div class="ready-div">
        @include('startupHeader')
        <div class="body-div">
            <h2 class="your-tailored-course-is-ready">your tailored course is ready!</h2>
            <h6 class="start-now-its-100-free">Start now, it’s 100% free</h6>
            <div class="level-div">
                <p class="level-p">Level</p>
                <p class="beginner-p">Beginner</p>
                <img class="icon" alt="" src={{ asset('img/icon.svg') }} />
            </div>
            <a href="{{ route('register') }}" class="btn facebook-btn">
                <div class="btn-box-div"></div>
                <b class="sign-up-with-facebook">Sign up with Facebook</b>
                <img class="facebook-icon" alt="" src={{ asset('img/facebookicon.svg') }} />
            </a>
            <a href="{{ route('register') }}" class="btn google-btn-a">
                <div class="btn-box-div"></div>
                <b class="sign-up-with-google">Sign up with Google</b>
                <img class="google-icon" alt="" src={{ asset('img/googleicon.svg') }} />
            </a>
            <p class="by-signing-up-for-norfk-you-a">
                By signing up for Norf’k you agree to the terms of services and to the privacy
            </p>
        </div>
    </div>
@endsection