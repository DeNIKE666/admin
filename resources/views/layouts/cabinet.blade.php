<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="{{ mix('assets/cabinet/atlantis.css') }} ">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,700&display=swap" rel="stylesheet">

</head>
<body>
<div class="wrapper">

    @include('partials.cabinet.top_header')
    @include('partials.cabinet.side_menu')
    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-green-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="text-white pb-2 fw-bold">Личный кабинет</h2>
                            <h5 class="text-white op-7 mb-2">и управление финансами</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-inner">
                @include('partials.cabinet.alert')
                @yield('content')
            </div>

        </div>
        @include('partials.cabinet.footer')
    </div>
</div>

<script src="{{ mix('assets/cabinet/atlantis.all.js') }}"></script>
<script src="{{ asset('assets/cabinet/atlantis.min.js') }}"></script>

@stack('scripts')

</body>
</html>
