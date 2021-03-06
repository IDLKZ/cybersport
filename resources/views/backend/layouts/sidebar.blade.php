<div class="sidebar">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="active">
                    <a href="#dashboard">
                        <i class="iconsmind-Home"></i>
                        <span>Главная</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("backend-tournaments")}}">
                        <i class="iconsmind-Building"></i> Турниры
                    </a>
                </li>
                <li>
                    <a href="{{route("backend-matches")}}">
                        <i class="iconsmind-Flag"></i> Матчи
                    </a>
                </li>
                <li>
                    <a href="{{route("backend-teams")}}">
                        <i class="simple-icon-layers"></i> Список команд
                    </a>
                </li>
                <li>
                    <a href="#messages">
                        <i class="iconsmind-Post-Mail"></i> Рассылка
                    </a>
                </li>
                <li>
                    <a href="#cms">
                        <i class="iconsmind-Optimization"></i> CMS
                    </a>
                </li>
                <li>
                    <a href="{{route('logout')}}">
                        <i class="iconsmind-Aim"></i> Выход
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
{{--            Главная--}}
            <ul class="list-unstyled" data-link="dashboard">
                <li class="active">
                    <a href="Dashboard.Default.html">
                        <i class="simple-icon-rocket"></i> Default
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Analytics.html">
                        <i class="simple-icon-pie-chart"></i>Analytics
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Ecommerce.html">
                        <i class="simple-icon-basket-loaded"></i> Ecommerce
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Content.html">
                        <i class="simple-icon-doc"></i> Content
                    </a>
                </li>
            </ul>



        </div>
    </div>
</div>
