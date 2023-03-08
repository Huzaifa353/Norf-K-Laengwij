@extends('user/layout')

@section('title', 'Dashboard')

@section('content')
    <!-- Section Hero Start  -->
    <div class="container-fluid profile-section">
        <div class="row profile-row">
            <div class="col-md-3 col-12 mt-5 pb-5">
                <div class="dashboard-menu">
                    <div class="dashboard-menu-item">
                        <img src={{ asset('img/p1.png') }} width="30" height="90" class="rounded-circle img-fluid">
                        <a href="{{ route('userDashboard') }}"><span class="dashboard-selected">Dashboard</span></a>
                    </div>
                    <br>                    
                    <div class="dashboard-menu-item">
                        <img src={{ asset('img/p2.png') }} width="30" height="90" class="rounded-circle img-fluid">
                        <a href="{{ route('userLearn') }}"><span class="dashboard">Learn</span></a>
                    </div>
                    <br>                    
                    <div class="dashboard-menu-item">
                        <img src={{ asset('img/p3.png') }} width="30" height="90" class="rounded-circle img-fluid">
                        <a href="{{ route('userAchievements') }}"><span class="dashboard">Achievements</span></a>
                    </div>
                    <br>                    
                    <div class="dashboard-menu-item">
                        <img src={{ asset('img/p4.png') }} width="30" height="90" class="rounded-circle img-fluid">
                        <a href="{{ route('userSettings') }}"><span class="dashboard">Settings</span></a>
                    </div>
                    <br>                    
                    <div class="dashboard-menu-item">
                        <img src={{ asset('img/p5.png') }} width="30" height="90" class="rounded-circle img-fluid">
                        <a href="{{ route('userHelp') }}"><span class="dashboard">Help</span></a>
                    </div>
                    <br>
                    <div class="dashboard-menu-item item-logout">
                        <img src="https://img.icons8.com/ios-filled/50/B90000/logout-rounded.png" width="30" height="90" class="rounded-circle img-fluid">
                        <a href="{{ route('logout') }}"><span class="dashboard">Logout</span></a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-2"></div> -->
            <div class="col-md-6 mt-5" id="new-sec2">
                <div class="mt-4">

                    <span class="data-t">Thursday, July 6, 2020</span>
                    <br>
                    <span class="data-t2">Morning Pam</span>
                    <br>                    <div class="progress-nav">
                    <div class="progress-nav-item">Vocabulary</div>
                    <div class="progress-nav-item selected">Grammer</div>
                    <div class="progress-nav-item">Listening</div>
                    <div class="progress-nav-item">Reading</div>
                    </div>

                    <br>                    <div class="data-progress">
                        <div class="card-data">

                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="card-title">Lesson 1</h5>
                                    <div class="row">

                                        <div class="col-md-3">

                                            <span class="card-text">Parts of speech</span>
                                        </div>
                                        <div class="col-md-8 progress">
                                            <div class="progress-bar bg-success " role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Lesson 1</h5>
                                <div class="row">

                                    <div class="col-md-3">

                                        <span class="card-text">Parts of speech</span>
                                    </div>
                                    <div class="col-md-8 progress">
                                        <div class="progress-bar bg-info " role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Lesson 1</h5>
                                <div class="row">

                                    <div class="col-md-3">

                                        <span class="card-text">Parts of speech</span>
                                    </div>
                                    <div class="col-md-8 progress">
                                        <div class="progress-bar bg-warning " role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-data2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title remainder">Remainders</h5>

                                        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src={{ asset('img/dpic.png') }} width="100px" class="img-fluid ">

                                        <p class="card-text p-ct1">Don't let <span style="font-size: 1.2rem; color: #13547a !important;">your goals</span>
                                            </br>
                                            <span>
                                                stay hanging
                                            </span>
                                        </p>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <h5 class="card-title top-results">Top Results</h5>
                                        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                        <!-- <a href="#" /class="btn btn-primary">Button</a> -->
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>



            </div>

            <div class="col-md-3 goal-sec">
                <div class="goals-section mt-5" id="new-section4">
                    <div class="goals mt-3">
                    Goals
                    </div>
                        <div class="row goal-row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">100% Vocabulary</h5>

                                        <p class="card-text p-c-t">this week</p>
                                        <br><br><!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Three Nfrok's Words</h5>

                                        <p class="card-text p-c-t">this month</p>
                                        <br><br><br><br><br><br><!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Three Nfrok's Words</h5>

                                        <p class="card-text p-c-t">this month</p>
                                        <br><br><br><br><!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>

                            </div>
                            <button type="button" class="btn set-new-goals btn-info">Set New Goals</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section hero End  -->
@endsection