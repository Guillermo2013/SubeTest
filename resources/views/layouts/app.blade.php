<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sube test    </title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="{{URL('ico/site.webmanifest')}}">
    <link rel="mask-icon" href="{{URL('ico/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nifty.min.css" rel="stylesheet">
    <link href="css/demo/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="css/demo/nifty-demo.min.css" rel="stylesheet">
    <link href="plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nifty.min.js"></script>
    <script src="js/demo/bg-images.js"></script>
    
</head>
<body>
    
    <div id="container" class="cls-container">
    <div id="bg-overlay" class="bg-img" style="background-image: url(img/bg-img/bg-img-7.jpg);"></div>
        <!-- <div id="bg-overlay" ></div> -->
        <div class="cls-content">
            <div class="cls-content-sm panel">
                <div class="panel-body">
                    @yield('content')
                </div>
            </div>   
        </div>
      
</body>
</html>
