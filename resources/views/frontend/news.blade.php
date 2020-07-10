@extends("frontend.layouts.layout")

@section("content")

    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="Новости">Новости</h1>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                @if(count($news)>0)

                @foreach($news as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post-box">
                        <div class="post-image">
                            <a href="news-detail/{{$item->slug}}">
                                <img src="{{$item->thumbnail}}" alt="image">
                            </a>
                        </div>

                        <div class="post-content">
                            <ul class="post-meta">
                                <li>От <a href="news-detail/{{$item->slug}}">Admin</a></li>
                                <li>{{$item->created_at->diffForHumans()}}</li>
                                <li>>Игровые</li>
                            </ul>
                            <h3><a href="news-detail/{{$item->slug}}">{{$item->title}}</a></h3>
                            <a href="news-detail/{{$item->slug}}" class="read-more-btn">Читать далее <i class="flaticon-null"></i></a>
                        </div>
                    </div>
                </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area text-center">
                          {{$news->links()}}
                        </div>
                    </div>

                 @else
                <h1>Новостей нет!</h1>
                    @endif



            </div>
        </div>
    </section>
    <!-- End Blog Area -->

@endsection
