<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Le blog de l'actus, du jeux vidéo et aussi du développement web pour rester connecter au commun des mortels"
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="nofollow">
        <meta name="googlebot" content="noindex">

        <title>{{ config('app.name', 'Blog') }}</title>

        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/174731608d.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/IntersectionObserver.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen  container shadow p-3 mb-5 bg-body rounded" id="container">
           @include('layouts.navigation')
            <main>
                @yield('home')
                @yield('index')
                @yield('create')
                @yield('posts')
                @yield('show')
                @yield('edit')
                @yield('edit-comment')
                @yield('login')
                @yield('register')
                @yield('user')
                @yield('back-office')
            </main>
            <footer class="text-center" style="background-color: #f1f1f1;">
                <h3 class="text-black">Réseaux</h3>
                <ul class="social">
                    <li>
                       <a href=" https://github.com/Git-Sebastien"><i class="fa-brands fa-github fa-xl"></i></a>
                    </li>
                    <li>
                        <a href="www.linkedin.com/in/sebancelin"><i class="fa-brands fa-linkedin fa-xl"></i></a>
                    </li>
                </ul>
                <!-- Copyright -->
                <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2020 Copyright:
                  <a class="text-dark" href="#">Myself</a>
                </div>
                <!-- Copyright -->
              </footer>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
