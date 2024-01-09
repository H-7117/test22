<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('assets/css/landingPage.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.css') }}" />
    <link rel="stylesheet" href="./image/aos-master/dist/aos.css" />
    <link rel="stylesheet" href=".{{ asset('assets/fonts/tajawal/Tajawal-Light.ttf') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <style>
        
    </style>
    <title>Document</title>
  </head>
  <body>
    <header class="header">
      <div class="logo">
        <img src="{{ asset('assets/img/logo22.png') }}" alt="" />
      </div>
      <div class="links">
        <ol reversed>
          <li><a href="{{ url('/') }}">الرئيسيه</a></li>
          <li><a href="{{ route('JonPosting') }}">بحث عن وظيفه</a></li>
          <li><a href="">من نحن</a></li>
        </ol>
      </div>
      <div class="Login_register">
        <button><a href="./rigester-form.html">حساب جديد</a></button>
        <a href="./loginPage.html">دخـــول</a>
      </div>
    </header>
<!-- ============================================================================================== -->