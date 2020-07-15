@extends("frontend.layouts.layout")

@section("content")

<!-- Start Page Title Area -->
<section class="page-title-area page-title-bg1">
    <div class="container">
        <div class="page-title-content">
            <h1 title="Контакты">Контакты</h1>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="contact-info">
                    <span class="sub-title">Наши контакты</span>
                    <h2>Всегда на связи!</h2>
                    <p> Появились вопросы или идеи? Напишите нам мы всегда рады вас выслушать!</p>

                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <h3>Наш адрес</h3>
                            <p>Казахстан</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-24-hours"></i>
                            </div>
                            <h3>Контактные данные</h3>
                            <p>Телефон: <a href="tel:+77064142427">(+7)706 414 24-27</a></p>
                            <p>Почта: <a href="mailto:hello@zelda.com">info@weplay.kz</a></p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <h3>Мы в соц. сетях</h3>
                            <div class="social-box">
{{--                                <a href="#" target="_blank"><i class="bx bxl-twitch"></i></a>--}}
{{--                                <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>--}}
{{--                                <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>--}}
                                <a href="https://www.youtube.com/channel/UCqRdjhqA6sXt0RD2wwWv1dw?view_as=subscriber" target="_blank"><i class="bx bxl-youtube"></i></a>
                                <a href="https://instagram.com/weplay_kz?igshid=1avjhv8gaqnkq" target="_blank"><i class="bx bxl-instagram"></i></a>
                                <a href="https://wa.me/77064142427" target="_blank"><i class="bx bxl-whatsapp"></i></a>
                                <a href="https://t.me/weplaykz" target="_blank"><i class="bx bxl-telegram"></i></a>
{{--                                <a href="#" target="_blank"><i class="bx bxl-vimeo"></i></a>--}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <img src="assets/img/popular-leagues-img1.jpg">
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

@endsection
