<!-- Start Navbar Area -->
<div class="navbar-area navbar-style-two">
    <div class="zelda-responsive-nav">
        <div class="container">
            <div class="zelda-responsive-menu">
                <div class="logo">
                    <a href="index-2.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="zelda-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('main')}}">
                    <img src="assets/img/logo.png" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">

                        <li class="nav-item"><a href="{{route('news')}}" class="nav-link">Новости </a></li>

                        <li class="nav-item"><a href="index-2.html#" class="nav-link">Статистика <i class="flaticon-down-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{route('frontend-tournaments')}}" class="nav-link">Турниры</a></li>
                                <li class="nav-item"><a href="{{route("frontend-teams")}}" class="nav-link">Команды</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Участие в турнирах</a></li>

                        <li class="nav-item"><a href="https://chat.whatsapp.com/D1UBTXKnB5E0qig2oSWKHx" class="nav-link">Поиск команд </a></li>

                        <li class="nav-item"><a href="{{route("frontend-contacts")}}" class="nav-link">Контакты</a></li>
                    </ul>

{{--                    <div class="others-option d-flex align-items-center">--}}

{{--                        <div class="option-item">--}}
{{--                            <div class="side-menu-btn">--}}
{{--                                <i class="flaticon-null-2" data-toggle="modal" data-target="#sidebarModal"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu" data-toggle="modal" data-target="#sidebarModal">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

{{--            <div class="container">--}}
{{--                <div class="option-inner">--}}
{{--                    <div class="others-option">--}}

{{--                        <div class="option-item">--}}
{{--                            <div class="side-menu-btn">--}}
{{--                                <i class="flaticon-null-2" data-toggle="modal" data-target="#sidebarModal"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
<!-- End Navbar Area -->
