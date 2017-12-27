<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/full-slider.css') }}" rel="stylesheet" type="text/css" media="all" >
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet" type="text/css" media="all" >
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" media="all" >
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" id="font-awesome-css" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css?ver=3.2.1" type="text/css" media="all">
    {{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
--}}

    {{ $css or '' }}
</head>
<body>
    <div id="app">
        {{ $content }}
    </div>

    <!-- Scripts -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/alert.js') }}"></script>
</body>
</html>
