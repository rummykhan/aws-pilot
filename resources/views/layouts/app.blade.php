<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title> {{ env('APP_NAME') }} | @yield('title') </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/icon-set/style.css') }}">


    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('/assets/css/theme.min.css') }}">
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

<script src="{{ asset('/assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js') }}"></script>

@include('partials.header')

<div id="app">
    <app-layout env="{{ env('APP_ENV') }}"/>
</div>

@include('partials.footer')

<!-- JS Global Compulsory  -->
<script src="{{ asset('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- JS Implementing Plugins -->
<script src="{{ asset('/assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/hs-form-search/dist/hs-form-search.min.js') }}"></script>


<!-- JS Front -->
<script src="{{ asset('/assets/js/theme.min.js') }}"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
            $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });


        // initialization of navbar vertical navigation
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        // initialization of tooltip in navbar vertical menu
        $('.js-nav-tooltip-link').tooltip({boundary: 'window'})

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function (e) {
            if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                return false;
            }
        });

        // initialization of unfold
        $('.js-hs-unfold-invoker').each(function () {
            var unfold = new HSUnfold($(this)).init();
        });

        // initialization of form search
        $('.js-form-search').each(function () {
            new HSFormSearch($(this)).init()
        });
    });
</script>

<script type="text/javascript">
    window.SETTING_APP_URL = '{{ env('APP_URL') }}';
    window.SETTING_BASE_URL = '{{ env('APP_URL') }}/api';
</script>

<script type="text/javascript" src="{{ asset('/js/app.js') }}?_={{ rand(100, 1000000) }}"></script>
@yield('scripts')

<!-- IE Support -->
<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{ asset('/assets/vendor/babel-polyfill/polyfill.min.js') }}"><\/script>');
</script>
</body>
</html>
