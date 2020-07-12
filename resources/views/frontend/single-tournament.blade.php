@extends('frontend.layouts.layout')
@section('content')

    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="Esports league">Esports league</h1>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Tournament Details -->
    <section class="tournament-details-area ptb-100">
        <div class="container">
            <div class="tournament-details-desc">
                <span class="sub-title">{{$tournament->start}}</span>
                <h3>{{$tournament->title}}</h3>

                <ul class="tournament-meta">
                    <li>
                        <div class="icon">
                            <i class="flaticon-coin"></i>
                        </div>
                        <span>{{$tournament->info}}</span>
                        Призовой фонд
                    </li>

                    <li>
                        <div class="icon">
                            <i class="flaticon-game"></i>
                        </div>
                        <span>5v5</span>
                        Игровой мод
                    </li>

                    <li>
                        <div class="icon">
                            <i class="flaticon-game-1"></i>
                        </div>
                        <span>PC</span>
                        Platform
                    </li>

                    <li>
                        <div class="icon">
                            <i class="flaticon-teamwork"></i>
                        </div>
                        <span>{{count($tournament->tournament_teams)/5}} Групп</span>
                        {{count($tournament->tournament_teams)*5}} Игроков
                    </li>
                </ul>
            </div>

            <div class="matches-tabs">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-matches" role="tabpanel">
                        <div class="single-matches-box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team">
                                        <img src="assets/img/team1.png" alt="image">

                                        <div class="content">
                                            <h3>Fierce</h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12">
                                    <div class="matches-result">
                                        <ul>
                                            <li>9</li>
                                            <li>14</li>
                                        </ul>
                                        <span class="date-time">20TH May 2020, 23:00</span>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team right-image">
                                        <img src="assets/img/team2.png" alt="image">

                                        <div class="content">
                                            <h3>Devlis</h3>
                                            <ul class="watch-list">
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                <li><span>Watch</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-matches-box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team">
                                        <img src="assets/img/team3.png" alt="image">

                                        <div class="content">
                                            <h3>Skullking</h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12">
                                    <div class="matches-result">
                                        <ul>
                                            <li>10</li>
                                            <li>8</li>
                                        </ul>
                                        <span class="date-time">19TH May 2020, 22:00</span>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team right-image">
                                        <img src="assets/img/team4.png" alt="image">

                                        <div class="content">
                                            <h3>Gurdian</h3>
                                            <ul class="watch-list">
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                <li><span>Watch</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-matches-box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team">
                                        <img src="assets/img/team5.png" alt="image">

                                        <div class="content">
                                            <h3>Rover</h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12">
                                    <div class="matches-result">
                                        <ul>
                                            <li>10</li>
                                            <li>10</li>
                                        </ul>
                                        <span class="date-time">18TH May 2020, 21:00</span>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team right-image">
                                        <img src="assets/img/team6.png" alt="image">

                                        <div class="content">
                                            <h3>Gleopsis</h3>
                                            <ul class="watch-list">
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                <li><span>Watch</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-matches-box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team">
                                        <img src="assets/img/team7.png" alt="image">

                                        <div class="content">
                                            <h3>Solider</h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12">
                                    <div class="matches-result">
                                        <ul>
                                            <li>14</li>
                                            <li>15</li>
                                        </ul>
                                        <span class="date-time">17TH May 2020, 24:00</span>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team right-image">
                                        <img src="assets/img/team8.png" alt="image">

                                        <div class="content">
                                            <h3>Roosgun</h3>
                                            <ul class="watch-list">
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="single-tournament.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                <li><span>Watch</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Tournament Details -->

    <!-- Start Top Team Area -->
    <section class="top-team-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Команды</span>
{{--                <h2>Top ranking team</h2>--}}
            </div>

            <div class="row">
                @foreach($tournament->tournament_teams as $item)
                    @foreach($item->teams as $team)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-top-team-item">
                        <img src="{{$team->logo}}" alt="{{$team->title}}" style="width: 150px; height: 150px">
                        <h3>{{$team->title}}</h3>
{{--                        <ul>--}}
{{--                            <li><a href="single-tournament.html#" target="_blank"><i class='bx bxl-youtube'></i></a></li>--}}
{{--                            <li><a href="single-tournament.html#" target="_blank"><i class='bx bxl-twitch'></i></a></li>--}}
{{--                            <li><a href="single-tournament.html#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Top Team Area -->

@endsection
