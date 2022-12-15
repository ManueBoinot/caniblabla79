{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
    <h1 class="text-center text-uppercase text-info">ESPACE PERSONNEL</h1>
@endsection

@section('content')
    {{-- écrire ici le code de cette page --}}

    <section class="container mx-auto w-50 text-warning">
        <div class="row gap-5 p-5">
            <div class="row">
                <h1 class="text-center text-white fst-italic">Bonjour <span class="fw-bold">{{ $user->pseudo }}</span> !</h1>
            </div>

            <!-- INFORMATIONS UTILISATEURS -->
            <div class="row d-flex text-center align-items-center border border-warning p-5">

                <div class="col-12">
                    <h2 class="mb-5">MES INFORMATIONS</h2>
                </div>

                <div class="col">
                    <label class="fw-bold text-white">Nom</label>
                    <p class="fs-4">{{ $user->nom }} </p>

                    <label class="fw-bold text-white">Prénom</label>
                    <p class="fs-4">{{ $user->prenom }} </p>

                    <label class="fw-bold text-white">Adresse email</label>
                    <p class="fs-4">{{ $user->email }}</p>
                </div>

                <div class="col">
                    <label class="fw-bold text-white">Pseudo</label>
                    <p class="fs-1">{{ $user->pseudo }} </p>

                    <img class="img-thumbnail m-2"
                        style="object-fit: contain; height: 200px; width: 200px; border-radius: 50%;"
                        src="/images/{{ $user->image }}" alt="avatar de {{ $user->pseudo }}">
                </div>
            </div>
            
        </div>
        <!-- BOUTONS -->
        <div class="row mx-auto">
            <div class="col d-flex justify-content-between m-2 px-5">
                <a href="{{ route('modifier-infos', Auth::user()) }}"><button class="btn btn-lg btn-warning">Modifier
                        mes
                        informations</button></a>
                <a href="{{ route('supprimer-compte', Auth::user()) }}"><button class="btn btn-danger">Supprimer mon
                        compte</button></a>
            </div>
        </div>
    </section>
@endsection
