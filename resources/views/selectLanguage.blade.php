@extends('layout')

@section('title', 'Select a Language')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/selectLanguage.css') }}" />
@endsection

@section('content')
    <div class="language-select-div">
        @include('startupHeader')
        <main class="body-main1">
            <h2 class="what-language-do-you-want-to-l">
                What LANGUAGE DO YOU WANT TO LEARN?
            </h2>
            <a href="{{ route('selectLevel') }}" class="btn btn-a4">
                <div class="btn btn-box-div6"></div>
                <div class="norfk-div1">norf’k</div>
            </a>
        </main>
    </div>
@endsection