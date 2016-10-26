<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- To ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title',"Katie Kujala's P3")</title>
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <div class="container">
        <footer class="navbar-default navbar-fixed-bottom">
            <div class="container text-center">
                <p class="small" style="color:#fff">
                    Created by Katie Kujala for CSCI E-15 Fall 2016
                </p>
            </div>
        </footer>
    </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
