<?php
use App\Models\Editor;
$editor = Editor::where('name','editor')->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/docs.theme.min.css')}}"> --}}
    <!-- Owl Stylesheets -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/Weloxy.ico')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <script src="{{ asset('assets/js/jquery1.1.min.js')}}" ></script>
    <script src="{{ asset('assets/js/jquery.cookie.js')}}" ></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    @if (Route::getCurrentRoute()->uri() == '/') 
    <link rel="canonical" href="@yield('canonical')" />
    @endif
    <!-- editor value -->
    @if(isset($editor))
      {!! $editor->value !!}
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    @yield('json_ld')
</head>

