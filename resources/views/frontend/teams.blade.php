@extends("frontend.layouts.layout")

@section("content")

    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="Команды!">Команды!</h1>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->


    <!-- Start Top Team Area -->
    <section class="top-team-area pb-70 mt-4">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Команды</span>
                <h2>Наши активные команды</h2>
            </div>

            <div class="row">
                @foreach($teams as $team)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-top-team-item" style="min-height: 350px">
                        @if(!is_null($team->logo))
                        <img src="{{$team->logo}}" alt="image" style="width: 150px; height: 150px;">
                        @else
                            <img src="img/no-logo.png" alt="image" style="width: 150px; height: 150px;">
                        @endif
                            <h4 class="text-danger font-weight-bold">{{$team->title}}</h4>
                            <h5>{{$team->captain}}</h5>


                    </div>
                </div>
                    @endforeach
                    {{$teams->links('vendor.pagination.cybersport')}}



            </div>
        </div>
    </section>
    <!-- End Top Team Area -->

@endsection
