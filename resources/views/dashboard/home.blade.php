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
                    <div>3h 47min</div>
                </div>
            </div>
            <div class="container-inner col-lg-4 thin-box">
                <div><img src="images/bad.png" height="270" width="61" alt=""></div>
                <span>Bad posture</span>
                <div class="active-time bad-posture">
                    <div>3h 47min</div>
                </div>
            </div>
            <div class="col-lg-12 medium-box" style="height: 100%;">
                <div class="row col-lg-24" style="height: calc(50% - 20px); background-color: #FFF;"></div>
                <div class="col-lg-24" style="height: 50%; background-color: #FFF;"></div>
            </div>
        </div>

        <div class="title">YOUR EXERCISES</div>

        <div class="row container-fluid" id="dashboard-exercises-info">
            <div class="col-lg-18">
                @for($i = 0; $i < 2; $i++)
                    <div class="row">
                        @for($j = 0; $j < 2; $j++)
                        <div class="container-inner col-lg-12 exercise">
                            <div class="exercise-box">
                                <div class="exercise-image">
                                    <img src="images/{{ $i + $j + 1 }}.png" width="auto" height="auto" alt="" style="max-height: 70px; max-width: 70px;">
                                </div>
                                <div class="exercise-text">
                                    <div>
                                        <span>{{ random_int(10, 15) }}</span>
                                        <span>/15</span>
                                    </div>
                                    <div>Successful Crunches</div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                @endfor
            </div>
            <div class="container-inner col-lg-6">
                <div class="container-inner col-lg-24 thin-box">
                    <h2>Daily Goal</h2>
                </div>
            </div>
        </div>
    </div>
@endsection