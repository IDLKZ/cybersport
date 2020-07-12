@extends('frontend.layouts.layout')
@section('content')

    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="3 in Row">3 in Row</h1>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($tournaments as $tournament)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-blog-post-box">
                                    <div class="post-image">
                                        <img src="{{$tournament->img}}" alt="image">
                                    </div>

                                    <div class="post-content">
                                        <ul class="post-meta">
                                            <li>{{$tournament->info}}</li>
                                            <li>{{$tournament->start}}</li>
                                            <li>{{$tournament->games->title}}</li>
                                        </ul>
                                        <h3><a href="{{route('frontend-single-tournament', $tournament->slug)}}">{{$tournament->title}}</a></h3>
                                    </div>
                                </div>
                            </div>

                @endforeach


            </div>
        </div>
    </section>
    <!-- End Blog Area -->

@endsection
