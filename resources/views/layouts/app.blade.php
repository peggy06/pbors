<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('js/external/bootstrap/css/sticky-footer.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/default.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/bootstraphack.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/stylesheet.css')}}" rel="stylesheet"/>
    <link href="{{asset('fonts/Material-Font/css/materialdesignicons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('js/external/bootstrap-datepicker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css"/>
    @yield('css')


    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    @include('partials.navbar')
    <div id="wrap">
        <div id="wrapper">
            <div class="main-container container">
                @yield('content')
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="{{asset('/js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/external/jquery/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/external/bootbox/bootbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/external/bootbox/bootbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/external/nanobar/nanobar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ripple.js')}}"></script>
<script type="text/javascript" src="{{asset('js/external/bootstrap-datepicker/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/external/bootstrap-datepicker/js/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/external/jquery-elastic/jquery.elastic.source.js')}}"></script>
<script type="text/javascript" src="{{asset('js/external/nanobar/nanobar.js')}}"></script>
@yield('js')
</body>
</html>
