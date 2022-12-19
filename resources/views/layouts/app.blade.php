<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- pour insérer un titre dynamique sur chaque page --}}
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="bg-warning">
    <div class="container-fluid text-center">
        @if (session()->has('message'))
            <p class="alert alert-success">{{ session()->get('message') }}</p>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="bg-warning" id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-warning shadow-sm">
            <div class="container">
                <a class="navbar-brand fs-1 text-white" href="{{ url('/home') }}">
                    CANIBLABLA 79
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- BARRE DE RECHERCHE POUR UTILISATEURS CONNECTÉS UNIQUEMENT -->
                    @if (Auth::user())
                    <ul class="navbar-nav mx-auto">
                        <form action="{{ route('messages-recherche') }}" method="GET" class="d-flex" role="search"
                            style="min-width: 350px">
                            <input class="form-control me-2" type="search" name="search"
                                placeholder="Rechercher dans les messages..." aria-label="Search">
                            <button class="btn btn-outline-dark" type="submit">Chercher</button>
                        </form>
                    </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!-- Affichage navbar pour les invités non connectés -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                            @endif
                            <!-- Affichage navbar pour les utilisateurs connectés -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fs-2 text-dark" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>

                                    <img class="img-thumbnail m-2"
                                        style="object-fit: contain; height: 50px; width: 50px; border-radius: 50%;"
                                        src="/images/{{ Auth::user()->image }}">
                                    {{ Auth::user()->pseudo }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end fs-4 text-dark bg-warning"
                                    aria-labelledby="navbarDropdown">

                                    {{-- lien vers le user profile --}}
                                    <a class="dropdown-item" href="{{ route('profil', $user = Auth::user()) }}">
                                        Mon profil public
                                    </a>

                                    {{-- lien vers le user compte --}}
                                    <a class="dropdown-item" href="{{ route('compte', $user = Auth::user()) }}">
                                        Mon compte
                                    </a>

                                    {{-- lien pour se déconnecter --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container-fluid py-5 mb-5 bg-dark">

            {{-- on injecte le code de chaque page du site --}}
            @yield('title')
            @yield('content')

        </main>

        <footer class="container-fluid bg-warning text-dark">
            <p class="text-center">CANIBLABLA 79 - Tous droits réservés</p>
        </footer>
        
    </div>
</body>

</html>
