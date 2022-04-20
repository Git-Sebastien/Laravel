<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        

        
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    
        <!-- Scripts -->
       
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen  container">
            @include('layouts.navigation')
            <main>
                @yield('home')
                @yield('index')
                @yield('create')
                @yield('show')
                @yield('edit')
                @yield('edit-comment')
                @yield('login')
                @yield('register')
                @yield('user')
            </main>
            <footer class="text-center text-white" style="background-color: #f1f1f1;">
                <!-- Copyright -->
                <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2020 Copyright:
                  <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
              </footer>

              <script src="https://kit.fontawesome.com/174731608d.js" crossorigin="anonymous"></script>
              <script src="{{ asset('js/app.js') }}" defer></script>
              <script src="{{ asset('js/intersectionObserver.js') }}" defer></script>
              <script src="{{ asset('js/main.js') }}" defer></script>
           
        </div>
    </body>
</html>
