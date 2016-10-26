<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- To ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title',"Katie Kujala's P3")</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('/images/favicon.jpg') }}" >
    <!--[if IE]><link rel="shortcut icon" href="{{ asset('/favicon.ico') }}"/><![endif]-->
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <div class="navbar navbar-bottom" role="navigation" style="padding-top:10px; margin:10px;">
        <div class="col-md-12 text-center">
            <p class="small" style="background-color:lavenderblush;">
                Created by Katie Kujala for CSCI E-15 Fall 2016
            </p>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
