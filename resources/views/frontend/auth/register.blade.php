@extends("frontend.layouts.layout")

@section("content")
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="УЧАСТВОВАТЬ!">УЧАСТВОВАТЬ!</h1>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Profile Authentication Area -->
    <section class="profile-authentication-area ptb-100">
        <div class="container">
            <div class="row">


                <div class="col-lg-6 col-md-12">
                    <div class="register-form">
                        <h2>Новая команда!</h2>
                        <small>Если вы ранее не участвовали в наших турнирах, то обязательно зарегистрируйтесь</small>
                        {{--livewire content--}}
                        @livewire('auth.register')

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                   <img src="assets/img/upcoming-tournaments-img1.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- Start Profile Authentication Area -->
    @endsection
