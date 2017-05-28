@extends('templates.dashboard')

@section('content')
    <div class="container-fluid" id="page-title-container">
        <div class="container-inner">
            <div id="dashboard-title">Dashboard</div>
            {{--<div id="dashboard-user-settings">--}}
                {{--<div id="user-small-logo-box">--}}
                    {{--<div class="user-small-logo"></div>--}}
                {{--</div>--}}
                {{--<div id="dashboard-user-settings-button">--}}
                    {{--<i class="fa fa-fw fa-lg fa-arrow-down"></i>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>

    <div id="dashboard-content">
        <div class="title">YOUR POSTURE FOR TODAY</div>

        <div class="row container-fluid" id="dashboard-short-info">
            <div class="container-inner col-lg-4 thin-box">
                <div><img src="images/perfect.png" height="270" width="61" alt=""></div>
                <span>Good posture</span>
                <div class="active-time good-posture">
                    <div>3h 47min</div>
                </div>
            </div>
            <div class="container-inner col-lg-4 thin-box">
                <div><img src="images/medium.png" height="270" width="61" alt=""></div>
                <span>Fair posture</span>
                <div class="active-time fair-posture">
                    <div>2h 35min</div>
                </div>
            </div>
            <div class="container-inner col-lg-4 thin-box">
                <div><img src="images/bad.png" height="270" width="61" alt=""></div>
                <span>Bad posture</span>
                <div class="active-time bad-posture">
                    <div>1h 23min</div>
                </div>
            </div>
            <div class="col-lg-12 medium-box">
                <div class="row">
                    <div class="col-lg-24" >
                        <div class="col-lg-12" style="height: 100%;">
                            <div style="display: table; height: 100%; float: right;">
                                <div style="display: table-cell; vertical-align: middle">
                                    <img src="images/bad-posture.png" height="auto" width="auto">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="height: 100%;">
                            <div style="display: table; height: 100%; float: left;">
                                <div style="display: table-cell; vertical-align: middle; font-size: 24px; text-align: left;">
                                    BAD POSTURE<br>AVERAGE
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-24">
                        <div class="col-lg-12" style="height: 100%;">
                            <div style="display: table; height: 100%; float: right;">
                                <div style="display: table-cell; vertical-align: middle;">
                                    <img src="images/good-posture.png" height="auto" width="auto">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="height: 100%;">
                            <div style="display: table; height: 100%; float: left; font-size: 24px; text-align: left;">
                                <div style="display: table-cell; vertical-align: middle">
                                    GOOD POSTURE<br>AVERAGE
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="title">YOUR EXERCISES</div>

        <div class="row container-fluid" id="dashboard-exercises-info">
            <div class="col-lg-18">
                <div class="row">
                    <div class="container-inner col-lg-12 exercise">
                        <div class="exercise-box">
                            <div class="exercise-image">
                                <img src="images/1.png" width="auto" height="auto" alt="" style="max-height: 70px; max-width: 70px;">
                            </div>
                            <div class="exercise-text">
                                <div>
                                    <span>11</span>
                                    <span>/15</span>
                                </div>
                                <div>Successful Squats</div>
                            </div>
                        </div>
                    </div>
                    <div class="container-inner col-lg-12 exercise">
                        <div class="exercise-box">
                            <div class="exercise-image">
                                <img src="images/2.png" width="auto" height="auto" alt="" style="max-height: 70px; max-width: 70px;">
                            </div>
                            <div class="exercise-text">
                                <div>
                                    <span>10</span>
                                    <span>/15</span>
                                </div>
                                <div>Successful Crunches</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-inner col-lg-12 exercise">
                        <div class="exercise-box">
                            <div class="exercise-image">
                                <img src="images/3.png" width="auto" height="auto" alt="" style="max-height: 70px; max-width: 70px;">
                            </div>
                            <div class="exercise-text">
                                <div>
                                    <span>14</span>
                                    <span>/15</span>
                                </div>
                                <div>Successful Squat Lifts</div>
                            </div>
                        </div>
                    </div>
                    <div class="container-inner col-lg-12 exercise">
                        <div class="exercise-box">
                            <div class="exercise-image">
                                <img src="images/4.png" width="auto" height="auto" alt="" style="max-height: 70px; max-width: 70px;">
                            </div>
                            <div class="exercise-text">
                                <div>
                                    <span>12</span>
                                    <span>/15</span>
                                </div>
                                <div>Successful Rows</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container-inner col-lg-24 thin-box" id="daily-goal-box">
                    <div class="container-fluid" id="daily-goal">
                        <div style="display: table-cell; vertical-align: middle">
                            <div>
                                <img src="images/daily-goal.png" width="auto" height="auto" alt="">
                            </div>
                            <div style="font-weight: bold; margin-top: 30px; font-size: 24px; text-align: center;">DAILY GOAL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection