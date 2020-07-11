const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles(

    ["resources/assets/css/bootstrap.min.css",
    "resources/assets/css/animate.min.css",
    "resources/assets/css/boxicons.min.css",
    "resources/assets/css/meanmenu.min.css",
    "resources/assets/css/flaticon.css",
    "resources/assets/css/fancybox.min.css",
    "resources/assets/css/owl.carousel.min.css",
    "resources/assets/css/magnific-popup.min.css",
    "resources/assets/css/style.css",
    "resources/assets/css/responsive.css",],
    'public/assets/frontend.css'

);
mix.copy("resources/assets/img","public/assets/img");
mix.copy("resources/assets/fonts","public/assets/fonts");


mix.scripts([
        "resources/assets/js/jquery.min.js",
        "resources/assets/js/popper.min.js",
        "resources/assets/js/bootstrap.min.js",
        "resources/assets/js/owl.carousel.min.js",
        "resources/assets/js/magnific-popup.min.js",
        "resources/assets/js/parallax.min.js",
        "resources/assets/js/meanmenu.min.js",
        "resources/assets/js/isotope.pkgd.min.js",
        "resources/assets/js/cursor.min.js",
        "resources/assets/js/fancybox.min.js",
        "resources/assets/js/wow.min.js",
        "resources/assets/js/form-validator.min.js",
        "resources/assets/js/contact-form-script.js",
        "resources/assets/js/ajaxchimp.min.js",
        "resources/assets/js/main.js",
    ],
    "public/assets/frontend.js");
