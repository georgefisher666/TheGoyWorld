<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])





</head>

<body>




  <div id="app">

 
  @include('panel.layouts.menu')


    <div class="container-fluid">
      <div class="row flex-nowrap row-menu">
       
        @include('panel.layouts.nav-bar')
        <main class="col ps-md-2 pt-2 twg-panel overflow-auto" style="background-color: #f5f7fa;">

        @yield('content')

 
        </main>
      </div>
    </div>

 
  </div>
</body>

@yield('page-js-files')
@yield('page-js-script')



</html>