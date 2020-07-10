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


    <title>Zelda - eSports & Gaming Template</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
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
@livewireScripts
</body>
</html>
