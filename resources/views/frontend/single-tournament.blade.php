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
                        @foreach($tournament->matches as $match)
                            <div class="single-matches-box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team">
                                        <img src="{{$match->teams1->logo}}" alt="image">

                                        <div class="content">
                                            <h3>{{$match->teams1->title}}</h3>
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
                                            <li>{{!is_null($match->result) ? $match->result : '0:0'}}</li>
                                        </ul>
                                        <span class="date-time">{{$match->start}}</span>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team right-image">
                                        <img src="{{$match->teams2->logo}}" alt="image">

                                        <div class="content">
                                            <h3>{{$match->teams2->title}}</h3>
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
                        @endforeach
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
