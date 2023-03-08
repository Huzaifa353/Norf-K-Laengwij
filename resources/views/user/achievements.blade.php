@extends('user/layout')

@section('title', 'Achievements')

@section('content')
    <div class="container-fluid profile-section" >
        <div class="row profile-row">
        <div class="col-md-5 col-xl-4 px-0 left-bar">
            <div class="mt-5 mx-4" id="new-section" style="height: fit-content;">
                <img src={{ asset('img/owl.png') }} id="owl-img">
                <div class="mb-3 left-bar-title">My Progress</div>
                <div class="progress-data">Doesn't have enough data</div>
                <a class="btn-link" href=""><div class="view-btn">View Statistics</div></a>
            </div>

            <div class="ranking mx-4" id="new-section" style="height: fit-content;">
                <header>
                    <div class="mb-3 left-bar-title">Ranking</div>
                    <a href="">
                    <i class="fa fa-refresh" style="color: #025585;"></i>
                    </a>
                </header>
                <div class="user">
                <div class="SrNo">1.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Jamie Lawrence</div>
                <div class="score">7,916</div>
                </div>
                <div class="user">
                <div class="SrNo">2.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Traci Sims</div>
                <div class="score">7,916</div>
                </div>
                <div class="user">
                <div class="SrNo">3.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Betsy Wilkins</div>
                <div class="score">7,916</div>
                </div>
                <div class="user">
                <div class="SrNo">4.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Alan Rodgers</div>
                <div class="score">7,916</div>
                </div>
                <div class="user">
                <div class="SrNo">5.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Thomas Hall</div>
                <div class="score">7,916</div>
                </div>
                <div class="user">
                <div class="SrNo">6.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Harold Carson</div>
                <div class="score">7,916</div>
                </div>
                <div class="user">
                <div class="SrNo">7.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Alexis Harris</div>
                <div class="score">7,916</div>
                </div>
                <div class="user">
                <div class="SrNo">8.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Stephanie Park</div>
                <div class="score">7,916</div>
                </div>
                <div class="user">
                <div class="SrNo">9.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Rita Clayton</div>
                <div class="score">7,916</div>
                </div>
                <div class="user">
                <div class="SrNo">10.</div>
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Kristopher Maxwell</div>
                <div class="score">7,916</div>
                </div>
                <div class="user current-user">
                <div class="profile-dp dp-small"><img src={{ asset('img/profile-dp-sample.png') }}></div>
                <div class="username">Usman Shahid</div>
                </div>
                <div class="last-update my-4 text-center">Last Updated 10 hours ago</div>
                <a class="btn-link" href=""><div class="view-btn">View Full Rankings</div></a>
            </div>
        </div>

            <div class="col-md-7 col-xl-8 px-4">
                <div class="mt-5 py-5"  id="new-sec2">
                    <span class="new-t1">
                    <img class="tree-icon">
                    Norf'k
                    </span>
                    <br><br>
                    <div class="new-t2">
                    <div class="dashedline"></div>
                    <h3>Unit 1</h3>
                    </div>
                    <br><br>
                    <div class="text-center img-sec">
                        <img src={{ asset('img/lesson1-5.png') }} width="600px" class="img-fluid medal-img">
                    </div>

                    <div class="new-t2">
                    <div class="dashedline"></div>
                    <h3>Unit 2</h3>
                    </div>
                    <br><br>
                    <div class="l2 text-center"></div>
                    <div class="text-center img-sec ">
                        <img src={{ asset('img/lesson6-10.png') }} width="633x" class="rounded-circle img-fluid ">
                    </div>
                </div>
            </div>
        </div>
        <img src={{ asset('img/owl.png') }} id="owl-img-bg">
    </div>
@endsection