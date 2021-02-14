<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sube</title>

    @include('includes.head')
    <!-- Preloader-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script type="text/javascript">
    $(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

</head>

<body>
    <div class="loader"></div>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
       @include('layouts.navbar')
        <div class="boxed">

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
      
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->
    <div>
           
            @yield('Dashboard')
    </div>
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@include('layouts.sidebar')


</body>
@include('includes.footer')
 
</html>
