{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
    informations
@endsection

@section('content')
    {{-- écrire ici le code de cette page --}}

    <section class="container mx-auto p-5" style="background-color: rgba(255,255,255,0.8)">
        <div class="row gap-5 p-5 bg-light">
            <h1 class="text-center fst-italic">Bonjour <span class="fw-bold">{{ $user->pseudo }}</span>  !</h1>

            <!-- INFORMATIONS UTILISATEURS -->
            <div class="col bg-light p-5 border">
                <div class="row mb-3">
                    <h2 class="mb-5 text-center">MES INFORMATIONS</h2>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="fw-bold">Nom</label>
                        <p class="fs-4 bg-white">{{ $user->nom }} </p>
                    </div>
                    <div class="col">
                        <label class="fw-bold">Prénom</label>
                        <p class="fs-4 bg-white">{{ $user->prenom }} </p>
                    </div>
                </div>
                <div class="col">
                    <label class="fw-bold">Pseudo</label>
                    <p class="fs-4 bg-white">{{ $user->pseudo }} </p>
                </div>
                <div class="col">
                    <label class="fw-bold">Adresse email</label>
                    <p class="fs-4 bg-white">{{ $user->email }}</p>
                </div>
            </div>
        </div>
        <!-- BOUTONS -->
        <div class="row mx-auto">
            <div class="col d-flex justify-content-between m-2 px-5">
                <a href="{{ route('modifier-infos', Auth::user())}}"><button class="btn btn-lg btn-primary">Modifier mes informations</button></a>
                <a href="{{ route('supprimer-compte', Auth::user())}}"><button class="btn btn btn-danger">Supprimer mon compte</button></a>
            </div>
        </div>
    </section>
@endsection
