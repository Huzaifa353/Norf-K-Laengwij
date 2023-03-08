@extends('layout')

@section('title', 'Home')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
    <div class="home-page-div">
        <div class="text-div"></div>
        <header class="header">
            <img class="header-design-icon" alt="" src="{{ asset('img/headerdesign.svg') }}" />
            <div class="header-img-div">
                <img class="vector-img-icon" alt="" src="{{ asset('img/vectorimg@2x.png') }}" />
                <div class="cover-div"></div>
                <img class="cover-icon" alt="" src="{{ asset('img/cover.svg') }}" />
            </div>
            <div class="language-design-div">
                <div class="english-div">eNGLISH</div>
                <img class="dotted-line-icon" alt="" src="{{ asset('img/dottedline.svg') }}" /><img class="dotted-line-icon1" alt="" src="{{ asset('img/dottedline1.svg') }}" />
                <div class="norfk-div">NORF’K</div>
            </div>
            <div class="topbar-div">
                <a href="{{ route('home') }}">
                    <div class="company-logo-div">
                        <img class="company-logo" alt="" src="{{ asset('img/company-logo.png') }}" />
                    </div>
                </a>
                <div class="nav-bar-div">
                    <a class="login-a" href="{{ route('login') }}">
                        <div class="login-btn-div"></div>
                        <div class="login-link-div">Have an account?</div>
                    </a>
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </div>
            </div>
            <div class="header-left-div">
                <div class="title-div">
                    <p class="norfk-p">NORF’K</p>
                    <p class="norfk-laengwij-p">NORF’K LAENGWIJ</p>
                </div>
                <div class="description-div">
                    Language is an integral part of the unique cultural heritage of Norfolk Islanders. It is hoped that this fun and attractive app will help to maintain and reinvigorate the use of the language
                </div>
                <a href="{{ route('selectLanguage') }}" class="get-started-btn">
                    <div class="btn-div"></div>
                    <div class="get-started-div">Get Started</div>
                </a>
            </div>
        </header>
        <main class="main-content">
            <div class="main-bg-div"></div>
            <section class="section-1">
                <div class="title-fancy-div">Why learn a language with us?</div>
                <div class="description-fancy-div">
                    <p class="norfk-p">
                        There is nothing better than speaking Norf’k with family and friends. But if that’s not available then there are three great reasons to build your skills with online learning.
                    </p>
                </div>
            </section>
            <section class="section-2">
                <div class="title-simple-div">
                    At your own pace and when it suits you
                </div>
                <div class="description-simple-div">
                    A spare 5 minutes? Log on and pick up from your last lesson
                </div>
                <img class="img1-icon" alt="" src="{{ asset('img/img1@2x.png') }}" />
            </section>
            <section class="section-3">
                <div class="title-simple-div1">
                    <p class="norfk-p">Build your confidence</p>
                </div>
                <div class="description-simple-div1">
                    Practise your pronunciation and compare with the online audio. Build your vocabulary and variety of phrases
                </div>
                <img class="img2-icon" alt="" src="{{ asset('img/img2@2x.png') }}" />
            </section>
            <section class="section-4">
                <div class="title-simple-div2">Stay engaged and motivated</div>
                <div class="description-simple-div2">
                    Track your progress, enjoy the fun activities. The online learning platform will know when you have mastered lesson content and are ready to move on
                </div>
                <img class="img3-icon" alt="" src="{{ asset('img/img3@2x.png') }}" />
            </section>
            <section class="section-5">
                <div class="description-simple-div3">
                    <p class="norfk-p">Download the Norf'k app or sign up online to</p>
                    <p class="norfk-laengwij-p">start learning a language today!</p>
                </div>
                <div class="title-fancy-div1">sTART UNDERSTANDING PEOPLE</div>
                <img class="img4-icon" alt="" src="{{ asset('img/img4@2x.png') }}" />
                <a href="" class="application-link"></a>
            </section>
        </main>
        <footer class="footer">
            <div class="footer-bg-div"></div>
            <div class="info-div">
                <a href="{{ route('home') }}">
                    <div class="company-logo-div">
                        <img class="company-logo" alt="" src="{{ asset('img/company-logo.png') }}" />
                    </div>
                </a>
                <div class="description-div1">
                    <p class="norfk-p">Boost your motivation and progress faster with our exclusive Adaptive Learning method</p>
                </div>
                <a href="" class="link link-blue-a">More</a>
            </div>
            <div class="link links-div">
                <a href="" class="link link-blue-a1">About</a><a href="" class="link link-white-a">Terms of service</a><a href="" class="link link-white-a1">Privacy policy</a><a href="" class="link link-white-a2">Blog</a>
                <a href="" class="link link-white-a3">Contact</a>
            </div>
            <div class="link links-div1">
                <a href="" class="link link-blue-a2">Contact Us</a><a href="" class="link link-white-a4">Help Center</a><a href="" class="link link-white-a5">Support Community</a><a href="" class="link link-white-a6">24/7 Support</a>
            </div>
            <div class="link links-div2">
                <a href="" class="link link-blue-a2">Contact Us</a><a href="" class="link link-white-a4">Help Center</a><a href="" class="link link-white-a5">Support Community</a><a href="" class="link link-white-a6">24/7 Support</a>
            </div>
        </footer>
    </div>
@endsection