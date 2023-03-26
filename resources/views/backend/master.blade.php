<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('backend.includes.css')
</head>

<body>

  @include('backend.includes.header')

  @include('backend.includes.sidebar')


    @yield('content')
  
  @include('backend.includes.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('backend.includes.js')

</body>

</html>