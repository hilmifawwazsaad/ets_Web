<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>News Portal</title>
  </head>
  <body>
    <!-- header -->
    @include('front.includes.header')

    <!-- slider -->
    <!--@include('front.includes.slide')-->

    <div class="container">
      @yield('content')
    </div>

    <!-- footer -->
    @include('front.includes.footer')

    <!-- JS -->
    @include('front.includes.js')
  </body>
</html>