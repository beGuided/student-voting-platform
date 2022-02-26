<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" FCE(T) throgh the Student Affairs on the journey of promoting the use of online voting system">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @yield('title') 

    <meta property="og:image" content="assets/images/election ui logo.png" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <!---------------------------->
    <!-----------CSS Links start-->
    <!---------------------------->

  
    <link rel="stylesheet" href="css/live_stat_style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="icon.css">
    <link rel="stylesheet" href="css/bootstrap.css">

     <!-- Googleicons CDN Link -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!---------------------------->
    <!-----------CSS Links end-->
    <!---------------------------->
</head>

<body>

   


    @yield('navbar')
    @yield('header')
    @yield('content')

  

{{--  
    <script src="js/jquery-1.7.1.js"></script> --}}
  {{--  <script src="js/jquery-3.3.1.min.js"></script> --}}
    <script src="js/scrollreveal.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/script.js"></script>
    {{-- <script src="js/vote.js"></script> --}}
    <script src="js/reveal.js"></script>
    <script src="js/live_stat_script.js"></script>

    

</body>

</html>