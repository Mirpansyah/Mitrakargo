<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Content Management System'}} | Mitra Kargo</title>
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-4">
            <div class="container">
            <a class="navbar-brand" href="/admin">Mitra Kargo CMS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
              </div>
            </div>
            </div>
          </nav>
        <main class="">
            @include('alert')
            @yield('content')
        </main>
        <div class="text-center text-muted">
            <small class="text-center">Content Management System By @qodrikhalik</small>
        </div>
        
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
