@extends('user/layout')

@section('title', 'Learn')

@section('content')
    <div class="container-fluid profile-section" >
        <div class="row profile-row">
            <div class="col-md-4 mt-5" id="new-section">
                <img src={{ asset('img/owl.png') }} id="owl-img">
                <div class="mb-3 left-bar-title">Lesson Progress</div>
                <div class="l-sec1 text-center">
                    <img src={{ asset('img/pic4.png') }} width="90" height="90" class="rounded-circle img-fluid">
                    <br>
                    <span id="l-dot"></span>
                    <span class="l-t1">Learning</span>
                    <span class="l-t2">(0/7)</span>
                    <br>
                    <span class="l-t3">Introducing new concepts</span>
                    <br>
                    <span class="l-t4">Index</span>
                </div>
                <div class="l2 text-center"></div>
                <div class="l-sec2 text-center">
                    <img src={{ asset('img/pic5.png') }} width="90" height="90" class="rounded-circle img-fluid ">
                    <br>
                    <span id="l-dot"></span>
                    <span class="l-t1">Practice</span>
                    <span class="l-t2">(15%)</span>
                    <br>
                    <span class="l-t3">Assimilation of concepts</span>
                    <br>
                    <span class="l-t4">Index</span>
                </div>
                <div class="l2 text-center"></div>
                <div class="l-sec2 text-center mb-5">
                    <img src={{ asset('img/pic3.png') }} width="90" height="90" class="rounded-circle img-fluid ">
                    <br>
                    <span ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="24" height="24"
                        viewBox="0 0 24 24"
                        style=" fill:#FA5252;"><path d="M18,21H6c-1.657,0-3-1.343-3-3v-8c0-1.657,1.343-3,3-3h12c1.657,0,3,1.343,3,3v8	C21,19.657,19.657,21,18,21z" opacity=".35"></path><path d="M8,7c0-2.209,1.791-4,4-4s4,1.791,4,4h2c0-3.314-2.686-6-6-6S6,3.686,6,7H8z"></path><path d="M12,12c-1.105,0-2,0.895-2,2s0.895,2,2,2s2-0.895,2-2S13.105,12,12,12z"></path></svg></span>
                    <span class="l-t1">Checkpoint</span>
                    <!-- <span class="l-t2">(15%)</span> -->
                    <br>
                    <span class="l-t3">Evaluation of everything</span>
                    <br>
                    <span class="l-t4 ">Learned</span>
                </div>
            </div>
            <!-- <div class="col-md-2"></div> -->
            <div class="col-md-7 mt-5 " id="new-sec2" >
                <div class="mt-4">
                    <span class="new-t1">Lesson 1</span>
                    <br><br>
                    <div class="new-t2">
                    <div class="dashedline"></div>
                    <h3>Learn</h3>
                    </div>
                    <br><br>
                    <div class="text-center img-sec">
                        <img src={{ asset('img/pic.png') }} width="500px" class="img-fluid medal-img">
                    </div>

                    <div class="new-t2">
                    <div class="dashedline"></div>
                    <h3>Practice</h3>
                    </div>
                    <br><br>
                    <div class="l2 text-center"></div>
                    <div class="text-center img-sec ">
                        <img src={{ asset('img/pic5.png') }} width="90" height="90" class="rounded-circle img-fluid ">
                    </div>

                    <div class="new-t2">
                    <div class="dashedline"></div>
                    <h3>Checkpoint</h3>
                    </div>
                    <br><br>
                    <div class="l2 text-center"></div>
                    <div class="text-center img-sec ">
                        <img src={{ asset('img/pic3.png') }} width="90" height="90" class="rounded-circle img-fluid ">
                    </div>
                </div>
            </div>
            <img src={{ asset('img/owl.png') }} id="owl-img-bg">
        </div>
    </div>
@endsection