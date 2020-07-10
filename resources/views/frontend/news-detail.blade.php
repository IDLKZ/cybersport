@extends("frontend.layouts.layout")

@section("content")

    @if(!is_null($news))
        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-image-slides owl-carousel owl-theme">
                                <div class="article-image">
                                    <img src="{{$news->img}}" alt="image">
                                </div>
                            </div>

                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <i class='bx bx-user'></i>
                                            <span>Автор</span>
                                            <a href="">Админ</a>
                                        </li>
                                        <li>
                                            <i class='bx bx-calendar'></i>
                                            <span>Добавлено</span>
                                            <a href="">{{$news->created_at->diffForHumans()}}</a>
                                        </li>
                                        <li>
                                            <i class='bx bx-calendar-check'></i>
                                            <span>Изменено</span>
                                            <a href="">{{$news->updated_at->diffForHumans()}}</a>
                                        </li>
                                    </ul>
                                </div>

                                <h3>{{$news->title}}</h3>

                                <p>
                                    {{$news->content}}
                                </p>

                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
    @endif

@endsection
