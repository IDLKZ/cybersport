<!doctype html>
<html lang="zxx">
<head>
    <base href="/">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="assets/css/frontend.css">
    @livewireStyles


    <title>WePlay Впервые в Казахстане!</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2753824051529779');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=2753824051529779&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>

<!-- Start Navbar Area -->
@include("frontend.layouts.components.navbar")
<!-- End Navbar Area -->

<!-- Sidebar Modal -->
@include("frontend.layouts.components.sidebar")
<!-- End Sidebar Modal -->

<!-- Search Overlay -->
@include("frontend.layouts.components.search")
<!-- End Search Overlay -->

@yield("content")

@include("frontend.layouts.components.footer")

<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

<div class="zelda-cursor"></div>
<div class="zelda-cursor2"></div>

<!-- Links of JS files -->
<script src="assets/js/frontend.js"></script>
<script>
    function checkEvent() {
        fbq('track', 'CompleteRegistration');
    }
</script>
@livewireScripts
</body>
</html>
