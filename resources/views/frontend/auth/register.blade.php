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
                    <div class="login-form">
                        <h2>Login</h2>

                        <form>
                            <div class="form-group">
                                <label>Username or email</label>
                                <input type="text" class="form-control" placeholder="Username or email">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
                                    <p>
                                        <input type="checkbox" id="test2">
                                        <label for="test2">Remember me</label>
                                    </p>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap">
                                    <a href="my-account.html#" class="lost-your-password">Lost your password?</a>
                                </div>
                            </div>

                            <button type="submit">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Profile Authentication Area -->
    @endsection
