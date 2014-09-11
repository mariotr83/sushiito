<!doctype html>

<html>
    <head>

        <!-- Meta tags -->
        <meta charset="utf-8">

        <!-- Style sheets CSS -->
        <link rel="stylesheet" href="<?=URL::to('css/nivo-slider.css')?>" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?=URL::to('css/style.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=URL::to('css/media-queries.css')?>">
        <!-- Javascript -->
        <script type="text/javascript" src="<?=URL::to('javascript/plugins/jquery/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?=URL::to('javascript/plugins/stellar/stellar.js')?>"></script>
        <script type="text/javascript" src="<?=URL::to('javascript/functions.js')?>"></script>

        {{ HTML::style('css/bjqs.css') }}

        {{ HTML::script('javascript/plugins/slider-master/bjqs-1.3.js', array('media' => 'screen')) }}
        {{ HTML::script('javascript/plugins/turn/turn.min.js', array('media' => 'screen')) }}

    </head>
    <body>
        <div class="container-general">
            @yield('menu')
            @yield('content')
        </div>

        <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

        <!-- Nivo Slider -->
        <script type="text/javascript" src="<?=URL::to('javascript/plugins/nivo/nivo.slider.js')?>"></script>

        @yield('js_code')

    </body>
</html>