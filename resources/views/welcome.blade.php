@extends('layouts.app')

@section('title')
    CANIBLABLA79 - Accueil
@endsection

@section('content')
    <section class="container">

        <h1 class="text-center text-info m-5 pb-5 fs-1">Bienvenue sur CANIBLABLA79 !</h1>

        <div class="m-5 p-5 border border-warning rounded">
            <p class="text-warning fs-2 text-center">Seules les personnes inscrites peuvent voir et publier les
                messages,<br>alors
                inscrivez-vous vite pour profiter de tous nos contenus !</p>

            <div class="text-warning text-center">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}"><button
                            class="btn btn-lg btn-warning text-uppercase">{{ __('Je m\'inscris !') }}</button></a>
                @endif
            </div>
        </div>

        <div class="my-5 py-5">
            <p class="text-white fs-4 text-center fst-italic">Ou connectez-vous si vous êtes déjà inscrit(e)</p>

            <div class="text-white text-center">
                @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}"><button
                            class="btn btn-lg btn-light">{{ __('Se connecter') }}</button></a>
                @endif
            </div>
        </div>

    </section>
@endsection
