<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900" rel="stylesheet">
      {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Laravel Homepage</title>
    <meta name="description" content="@yield('description')">
    <style>
      @yield('styles')
    </style>
  </head>
  <body>
@include('partials._nav')





@yield('content')



@include('partials._footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">

        </script>

          </body>
        </html>
