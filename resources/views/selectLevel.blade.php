@extends('layout')

@section('title', 'Login')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/selectLevel.css') }}" />
@endsection

@section('content')
    <div class="level-select-div">
        @include('startupHeader')
        <main class="body-main">
            <h2 class="what-is-your-norfk-level">What is your norf’k level?</h2>
            <p class="we-will-create-a-course-suited">
                We will create a course suited to your need in order to boost your learning
            </p>
            <a href="{{ route('begin') }}" class="btn btn-a1">
                <div class="btn btn-box-div3"></div>
                <div class="beginner-div">Beginner</div>
            </a>
            <a href="{{ route('begin') }}" class="btn btn-a2">
                <div class="btn btn-box-div4"></div>
                <div class="more-advanced-div">More advanced</div>
            </a>
            <a href="{{ route('begin') }}" class="btn btn-a3">
                <div class="btn btn-box-div4"></div>
                <div class="im-not-sure1">I’M NOT SURE</div>
            </a>
        </main>
    </div>
@endsection