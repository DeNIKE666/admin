<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon-16x16.png"/>

    <!-- Main structure css file -->
    <link  rel="stylesheet" href="{{ mix('assets/account/account.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start Preloader -->
<div id="preload-block">
    <div class="square-block"></div>
</div>
<!-- Preloader End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-5 col-lg-4 authfy-panel-left">
            <!-- brand-logo start -->
            <div class="brand-logo text-center">
                <img src="https://image.flaticon.com/icons/svg/1006/1006555.svg" width="150" alt="brand-logo">
            </div><!-- ./brand-logo -->
            <!-- authfy-login start -->
            <div class="authfy-login">
                @yield('content')
            </div> <!-- ./authfy-login -->
        </div> <!-- ./authfy-panel-left -->
        <div class="col-md-7 col-lg-8 authfy-panel-right hidden-xs hidden-sm">
            <div class="hero-heading">
                <div class="headline">
                    <h3>Название кабинета</h3>
                    <p>для использования личного кабинета необходимо авторизоваться</p>
                </div>
            </div>

        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->

<!-- Javascript Files -->
<script src="{{ mix('assets/account/account.js') }}"></script>

</body>
</html>
