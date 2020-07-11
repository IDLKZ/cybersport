@extends("frontend.layouts.layout")

@section("content")

    <!-- Start Main Banner Area -->
    <div class="home-slides owl-carousel owl-theme">
        <div class="single-banner-item banner-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="main-banner-content">
                            <span class="sub-title">Enjoy The Game</span>
                            <div class="logo">
                                <img src="assets/img/zelda.png" alt="image">
                            </div>
                            <h6>Available Now</h6>
                            <div class="btn-box">
                                <a href="index-2.html#" class="default-btn">Purchase Now</a>
                                <a href="contact.html" class="optional-btn">Free Trial</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="main-banner-image">
                            <img src="assets/img/banner-img1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-banner-item banner-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="main-banner-content">
                            <span class="sub-title">Enjoy The Game</span>
                            <div class="logo">
                                <img src="assets/img/zelda.png" alt="image">
                            </div>
                            <h6>Available Now</h6>
                            <div class="btn-box">
                                <a href="index-2.html#" class="default-btn">Purchase Now</a>
                                <a href="contact.html" class="optional-btn">Free Trial</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="main-banner-image">
                            <img src="assets/img/banner-img2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-banner-item banner-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="main-banner-content">
                            <span class="sub-title">Enjoy The Game</span>
                            <div class="logo">
                                <img src="assets/img/zelda.png" alt="image">
                            </div>
                            <h6>Available Now</h6>
                            <div class="btn-box">
                                <a href="index-2.html#" class="default-btn">Purchase Now</a>
                                <a href="contact.html" class="optional-btn">Free Trial</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="main-banner-image">
                            <img src="assets/img/banner-img3.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Matches Area -->
    <section class="matches-area bg-image ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Matches</span>
                <h2>Trending Matches</h2>
            </div>

            <div class="matches-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" id="all-matches-tab" data-toggle="tab" href="index-2.html#all-matches" role="tab" aria-controls="all-matches" aria-selected="true">All Matches</a></li>

                    <li class="nav-item" role="presentation"><a class="nav-link" id="upcoming-matches-tab" data-toggle="tab" href="index-2.html#upcoming-matches" role="tab" aria-controls="upcoming-matches" aria-selected="false">Upcoming Matches</a></li>

                    <li class="nav-item" role="presentation"><a class="nav-link" id="latest-result-tab" data-toggle="tab" href="index-2.html#latest-result" role="tab" aria-controls="latest-result" aria-selected="false">Latest Result</a></li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-matches" role="tabpanel">
                        <div class="single-matches-box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team">
                                        <img src="assets/img/team1.png" alt="image">

                                        <div class="content">
                                            <h3><a href="single-team.html">Fierce</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Devlis</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Skullking</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Gurdian</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Rover</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Gleopsis</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Solider</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Roosgun</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                <li><span>Watch</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="upcoming-matches" role="tabpanel">
                        <div class="single-matches-box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team">
                                        <img src="assets/img/team5.png" alt="image">

                                        <div class="content">
                                            <h3><a href="single-team.html">Rover</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12">
                                    <div class="matches-result">
                                        <ul>
                                            <li>0</li>
                                            <li>0</li>
                                        </ul>
                                        <span class="date-time">18TH May 2020, 21:00</span>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team right-image">
                                        <img src="assets/img/team6.png" alt="image">

                                        <div class="content">
                                            <h3><a href="single-team.html">Gleopsis</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Solider</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12">
                                    <div class="matches-result">
                                        <ul>
                                            <li>0</li>
                                            <li>0</li>
                                        </ul>
                                        <span class="date-time">17TH May 2020, 24:00</span>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team right-image">
                                        <img src="assets/img/team8.png" alt="image">

                                        <div class="content">
                                            <h3><a href="single-team.html">Roosgun</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                        <img src="assets/img/team1.png" alt="image">

                                        <div class="content">
                                            <h3><a href="single-team.html">Fierce</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12">
                                    <div class="matches-result">
                                        <ul>
                                            <li>0</li>
                                            <li>0</li>
                                        </ul>
                                        <span class="date-time">20TH May 2020, 23:00</span>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team right-image">
                                        <img src="assets/img/team2.png" alt="image">

                                        <div class="content">
                                            <h3><a href="single-team.html">Devlis</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Skullking</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12">
                                    <div class="matches-result">
                                        <ul>
                                            <li>0</li>
                                            <li>0</li>
                                        </ul>
                                        <span class="date-time">19TH May 2020, 22:00</span>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team right-image">
                                        <img src="assets/img/team4.png" alt="image">

                                        <div class="content">
                                            <h3><a href="single-team.html">Gurdian</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                <li><span>Watch</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="latest-result" role="tabpanel">
                        <div class="single-matches-box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="matches-team">
                                        <img src="assets/img/team1.png" alt="image">

                                        <div class="content">
                                            <h3><a href="single-team.html">Fierce</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Devlis</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Skullking</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Gurdian</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Rover</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Gleopsis</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Solider</a></h3>
                                            <ul class="watch-list">
                                                <li><span>Watch</span></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
                                            <h3><a href="single-team.html">Roosgun</a></h3>
                                            <ul class="watch-list">
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                <li><a href="index-2.html#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
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
    <!-- Start Matches Area -->

    <!-- Start Top Team Area -->
    <section class="top-team-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Gammer</span>
                <h2>Top ranking team</h2>
            </div>

            <div class="top-team-slides owl-carousel owl-theme">
                <div class="single-top-team-box">
                    <div class="bg-image">
                        <img src="assets/img/top-team-bg.png" alt="image">
                    </div>

                    <div class="content">
                        <img src="assets/img/top-team-img1.png" alt="image">
                        <h3><a href="single-team.html">Fierce</a></h3>
                        <ul>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-top-team-box">
                    <div class="bg-image">
                        <img src="assets/img/top-team-bg.png" alt="image">
                    </div>

                    <div class="content">
                        <img src="assets/img/top-team-img2.png" alt="image">
                        <h3><a href="single-team.html">Devlis</a></h3>
                        <ul>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-top-team-box">
                    <div class="bg-image">
                        <img src="assets/img/top-team-bg.png" alt="image">
                    </div>

                    <div class="content">
                        <img src="assets/img/top-team-img3.png" alt="image">
                        <h3><a href="single-team.html">Skulking</a></h3>
                        <ul>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-top-team-box">
                    <div class="bg-image">
                        <img src="assets/img/top-team-bg.png" alt="image">
                    </div>

                    <div class="content">
                        <img src="assets/img/top-team-img4.png" alt="image">
                        <h3><a href="single-team.html">Gurdian</a></h3>
                        <ul>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-top-team-box">
                    <div class="bg-image">
                        <img src="assets/img/top-team-bg.png" alt="image">
                    </div>

                    <div class="content">
                        <img src="assets/img/top-team-img5.png" alt="image">
                        <h3><a href="single-team.html">Roosgun</a></h3>
                        <ul>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
                            <li><a href="index-2.html#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Team Area -->

    <!-- Start Live Stream Area -->
    <section class="live-stream-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Watch</span>
                <h2>Live Stream</h2>
            </div>

            <div class="live-stream-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" id="twitch-tab" data-toggle="tab" href="index-2.html#twitch" role="tab" aria-controls="twitch" aria-selected="true">Twitch</a></li>

                    <li class="nav-item" role="presentation"><a class="nav-link" id="youtube-tab" data-toggle="tab" href="index-2.html#youtube" role="tab" aria-controls="youtube" aria-selected="false">Youtube</a></li>

                    <li class="nav-item" role="presentation"><a class="nav-link" id="mixer-tab" data-toggle="tab" href="index-2.html#mixer" role="tab" aria-controls="mixer" aria-selected="false">Mixer</a></li>

                    <li class="nav-item" role="presentation"><a class="nav-link" id="vimeo-tab" data-toggle="tab" href="index-2.html#vimeo" role="tab" aria-controls="vimeo" aria-selected="false">Vimeo</a></li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="twitch" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img1.jpg" alt="image">

                                    <div class="content">
                                        <h3>Fortnite 2 Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img2.jpg" alt="image">

                                    <div class="content">
                                        <h3>Pubg Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img3.jpg" alt="image">

                                    <div class="content">
                                        <h3>Free Fire Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img4.jpg" alt="image">

                                    <div class="content">
                                        <h3>Combat 5 Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img5.jpg" alt="image">

                                    <div class="content">
                                        <h3>Control Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="youtube" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img3.jpg" alt="image">

                                    <div class="content">
                                        <h3>Free Fire Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img4.jpg" alt="image">

                                    <div class="content">
                                        <h3>Combat 5 Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img5.jpg" alt="image">

                                    <div class="content">
                                        <h3>Control Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img1.jpg" alt="image">

                                    <div class="content">
                                        <h3>Fortnite 2 Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img2.jpg" alt="image">

                                    <div class="content">
                                        <h3>Pubg Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mixer" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img1.jpg" alt="image">

                                    <div class="content">
                                        <h3>Fortnite 2 Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img2.jpg" alt="image">

                                    <div class="content">
                                        <h3>Pubg Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img3.jpg" alt="image">

                                    <div class="content">
                                        <h3>Free Fire Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img4.jpg" alt="image">

                                    <div class="content">
                                        <h3>Combat 5 Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img5.jpg" alt="image">

                                    <div class="content">
                                        <h3>Control Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="vimeo" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img3.jpg" alt="image">

                                    <div class="content">
                                        <h3>Free Fire Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img4.jpg" alt="image">

                                    <div class="content">
                                        <h3>Combat 5 Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img5.jpg" alt="image">

                                    <div class="content">
                                        <h3>Control Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img1.jpg" alt="image">

                                    <div class="content">
                                        <h3>Fortnite 2 Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5">
                                <div class="single-live-stream-box">
                                    <img src="assets/img/live-stream-img2.jpg" alt="image">

                                    <div class="content">
                                        <h3>Pubg Live <i class="flaticon-play"></i></h3>
                                    </div>

                                    <a href="index-2.html#" target="_blank" class="link-btn" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Live Stream Area -->

    <!-- Start Products Area -->
    <section class="products-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Магазин</span>
                <h3>Здесь вы можете скачать игры</h3>
            </div>

            <div class="products-slides owl-carousel owl-theme">
                <div class="single-products-item">
                    <figure class="widget-description-game__about-text">
                        <div class="responsive-object responsive-object--16by9">
                            <img src="https://svirtus.cdnvideo.ru/49T9ZB5crDgFKZvJLBWTL_1mT9o=/0x0:800x481/573x325/filters:quality(100)/https://hb.bizmrg.com/cybersportru-media/e9/e9504830011f2e3a8f95eec98361e812.jpg?m=6656aba1b6eaf3e0f5d396c2ec78e702" alt="Dota 2">
                        </div>
                        <figcaption>
                            <h1>Dota 2</h1>
                            <div>
                                <p>
                                    <span class="color--gray-8a">Разработчик:</span> Valve <br>
                                    <span class="color--gray-8a">Издатель:</span> Valve <br>
                                    <span class="color--gray-8a">Дата анонса:</span> 13 окт. 2010 г. <br>
                                    <span class="color--gray-8a">Дата выхода:</span> 9 июл. 2013 г.
                                </p>
                                <p>
                                    <span class="color--gray-8a">Последняя версия:</span> <a href="https://www.cybersport.ru/dota-2/news/v-dota-2-vyshlo-obnovlenie-7-24" rel="nofollow noopener noreferrer" target="_blank">7.24</a><br>
                                    <span class="color--gray-8a">Сайт:</span> <a href="http://dota2.com" rel="nofollow noopener noreferrer" target="_blank">Сайт</a>
                                </p>
                                <p><a href="https://store.steampowered.com/app/570/" rel="nofollow noopener noreferrer" target="_blank" class="btn btn-danger">Скачать Dota 2</a></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="single-products-item">
                    <figure class="widget-description-game__about-text">
                        <div class="responsive-object responsive-object--16by9">
                            <img src="https://svirtus.cdnvideo.ru/HQLdLr7vO_kGM51eSmIVfKyWXjA=/0x0:1531x858/573x325/filters:quality(100)/https://hb.bizmrg.com/cybersportru-media/64/64a78231b87839d38f6ec6bb853cf2d1.jpg?m=dc1acc54451364ab2fc685970dd06a43" alt="CS:GO">
                        </div>
                        <figcaption>
                            <h1>CS:GO</h1>
                            <div>
                                <p>
                                    <span class="color--gray-8a">Разработчик:</span> Valve, Hidden Path Entertainment <br>
                                    <span class="color--gray-8a">Издатель:</span> Valve <br>
                                    <span class="color--gray-8a">Дата анонса:</span> 12 авг. 2011 г. <br>
                                    <span class="color--gray-8a">Дата выхода:</span> 21 авг. 2012 г.
                                </p>
                                <p>
                                    <span class="color--gray-8a">Последняя версия:</span> <a href="https://www.cybersport.ru/counter-strike-go/news/obnovlenie-cs-go-uluchshilo-modeli-agentov-iz-operacii-shattered-web" rel="nofollow noopener noreferrer" target="_blank">1.37.3.0</a><br>
                                    <span class="color--gray-8a">Сайт:</span> <a href="http://www.counter-strike.net" rel="nofollow noopener noreferrer" target="_blank">www.counter-strike.net</a>
                                </p>
                                <p><a href="https://store.steampowered.com/app/730/" rel="nofollow noopener noreferrer" target="_blank" class="btn btn-danger">Скачать CS:GO</a></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="single-products-item">
                    <figure class="widget-description-game__about-text">
                        <div class="responsive-object responsive-object--16by9">
                            <img src="https://svirtus.cdnvideo.ru/CCKrpMSvRAcfvS7DbXzzudyIaaE=/0x0:1595x895/573x325/filters:quality(100)/https://hb.bizmrg.com/cybersportru-media/2c/2cb0a2c3593c0c0a14a6284d7033b90c.jpg?m=ce8dfcda6d9fbd37e916718aa357d23f" alt="PUBG">
                        </div>
                        <figcaption>
                            <h1>PUBG</h1>
                            <div>
                                <p>
                                    <span class="color--gray-8a">Разработчик:</span> PUBG Corp. <br>
                                    <span class="color--gray-8a">Издатель:</span> PUBG Corp.; Mail.Ru Group (PC в СНГ); Tencent (PC и мобильные устройства в Китае); Microsoft Studios (Xbox One); Sony (PS4). <br>
                                    <span class="color--gray-8a">Дата анонса:</span> 1 июн. 2016 г. <br>
                                    <span class="color--gray-8a">Дата выхода:</span> 20 дек. 2017 г.
                                </p>
                                <p>
                                    <span class="color--gray-8a">Последняя версия:</span> <a href="https://www.pubg.com/ru/2019/12/11/pc-update-5-3/" rel="nofollow noopener noreferrer" target="_blank">5.3</a><br>
                                    <span class="color--gray-8a">Сайт:</span> <a href="https://www.pubg.com/" rel="nofollow noopener noreferrer" target="_blank">www.pubg.com</a>
                                </p>
                                <p><a href="https://store.steampowered.com/app/578080" rel="nofollow noopener noreferrer" target="_blank" class="btn btn-danger">Скачать PUBG</a></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="single-products-item">
                    <figure class="widget-description-game__about-text">
                        <div class="responsive-object responsive-object--16by9">
                            <img src="https://svirtus.cdnvideo.ru/D_15hrJ2XKwm6FAXBPGzHLb8VbY=/0x0:1275x715/573x325/filters:quality(100)/https://hb.bizmrg.com/cybersportru-media/29/29b706c71a61516bca04aee960dafb0d.jpg?m=f2c242c064df786d79921140971cae1b" alt="Fornite">
                        </div>
                        <figcaption>
                            <h1>Fornite</h1>
                            <div>
                                <p>
                                    <span class="color--gray-8a">Разработчик:</span> Epic Games <br>
                                    <span class="color--gray-8a">Издатель:</span> Epic Games <br>
                                    <span class="color--gray-8a">Дата анонса:</span> 10 окт. 2011 г. <br>
                                    <span class="color--gray-8a">Дата выхода:</span> 25 июл. 2015 г.
                                </p>
                                <p>
                                    <span class="color--gray-8a">Последняя версия:</span> <a href="https://www.epicgames.com/fortnite/ru/news/battle-royale-update-whats-new-in-v11-40" rel="nofollow noopener noreferrer" target="_blank">11.40</a><br>
                                    <span class="color--gray-8a">Сайт:</span> <a href="https://www.epicgames.com/fortnite/ru/buy-now/battle-royale" rel="nofollow noopener noreferrer" target="_blank">www.epicgames.com</a>
                                </p>
                                <p><a href="https://www.epicgames.com/fortnite/ru/buy-now/battle-royale" rel="nofollow noopener noreferrer" target="_blank" class="btn btn-danger">Скачать Fortnite</a></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="single-products-item">
                    <figure class="widget-description-game__about-text">
                        <div class="responsive-object responsive-object--16by9">
                            <img src="https://svirtus.cdnvideo.ru/Q-WY_mhet1w9QYEDx6qoguy8FjQ=/0x0:1274x714/573x325/filters:quality(100)/https://hb.bizmrg.com/cybersportru-media/77/77a16665b21989d87e55379741bcb1fd.jpg?m=3c7b08206759388d05297e1cf2ee1c7d" alt="League of Legends">
                        </div>
                        <figcaption>
                            <h1>League of Legends</h1>
                            <div>
                                <p>
                                    <span class="color--gray-8a">Разработчик:</span> Riot Games <br>
                                    <span class="color--gray-8a">Издатель:</span> Riot Games, THQ, Tencent <br>
                                    <span class="color--gray-8a">Дата анонса:</span> 7 окт. 2008 г. <br>
                                    <span class="color--gray-8a">Дата выхода:</span> 27 окт. 2009 г.
                                </p>
                                <p>
                                    <span class="color--gray-8a">Последняя версия:</span> <a href="https://ru.leagueoflegends.com/ru-ru/news/game-updates/patch-10-2-notes/" rel="nofollow noopener noreferrer" target="_blank">10.2</a><br>
                                    <span class="color--gray-8a">Сайт:</span> <a href="https://ru.leagueoflegends.com/ru/" rel="nofollow noopener noreferrer" target="_blank">leagueoflegends.com</a>
                                </p>
                                <p><a href="https://signup.ru.leagueoflegends.com/ru/signup/index#/" rel="nofollow noopener noreferrer" target="_blank" class="btn btn-danger">Скачать League of Legends</a></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products Area -->

    <!-- Start Partner Area -->
    <div class="partner-area bg-image pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Наши партнеры</span>
            </div>

            <div class="partner-slides owl-carousel owl-theme">
                <div class="single-partner-item">
                    <a href="index-2.html#" class="d-block"><img src="assets/img/partner-img1.png" alt="image"></a>
                </div>

                <div class="single-partner-item">
                    <a href="index-2.html#" class="d-block"><img src="assets/img/partner-img2.png" alt="image"></a>
                </div>

                <div class="single-partner-item">
                    <a href="index-2.html#" class="d-block"><img src="assets/img/partner-img3.png" alt="image"></a>
                </div>

                <div class="single-partner-item">
                    <a href="index-2.html#" class="d-block"><img src="assets/img/partner-img4.png" alt="image"></a>
                </div>

                <div class="single-partner-item">
                    <a href="index-2.html#" class="d-block"><img src="assets/img/partner-img5.png" alt="image"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->




    @endsection
