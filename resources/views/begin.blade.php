@extends('layout')

@section('title', 'Login')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/begin.css') }}" />
@endsection

@section('content')
    <div class="start-div">
        @include('startupHeader')
        <div class="body-div1">
            <img class="profile-pic-icon" alt="" src={{ asset('img/profilepic.svg') }} />
            <h2 class="lets-go-on">lET’S GO ON</h2>
            <p class="being-a-beginner-its-just-as">
                Being a beginner, it’s just as important to progress as to intensify your knowledge
            </p>
            <a href="{{ route('ready') }}" class="btn btn-a">
                <div class="btn btn-box-div2"></div>
                <div class="im-not-sure">CONTINUE</div>
            </a>
        </div>
    </div>
@endsection