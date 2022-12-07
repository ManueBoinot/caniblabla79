{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
    Modifier-infos
@endsection

@section('content')
    {{-- écrire ici le code de cette page --}}
    <section class="container mx-auto p-5" style="background-color: rgba(255,255,255,0.8)">
        <div class="row gap-5 p-5 bg-light">
            <!-- INFORMATIONS UTILISATEURS -->
            <div class="col bg-light p-5 border">
                <div class="row mb-3">
                    <h2 class="mb-5 text-center">MODIFIER MES INFORMATIONS</h2>
                </div>
                <div class="row mb-3">
                    <form action="{{ 'modifier-infos' }}" method="POST">
                        <div class="col">
                            <label for="inputNom" class="form-label fw-bold fs-5">Nouveau nom</label>
                            <input type="text" class="form-control" id="inputNom" area-describedby="nomHelp">
                            <div id="nomHelp" class="form-text">Nom actuel : {{ $user->nom }} </div>
                        </div>
                        <div class="col">
                            <label for="inputPrenom" class="form-label fw-bold fs-5">Nouveau prénom</label>
                            <input type="text" class="form-control" id="inputPrenom" area-describedby="prenomHelp">
                            <div id="prenomHelp" class="form-text">Prénom actuel : {{ $user->prenom }}
                            </div>
                        </div>
                        <div class="col">
                            <label for="inputPseudo" class="form-label fw-bold fs-5">Nouveau pseudo</label>
                            <input type="text" class="form-control" id="inputPseudo" area-describedby="pseudoHelp">
                            <div id="pseudoHelp" class="form-text">Pseudo actuel : {{ $user->pseudo }}
                            </div>
                        </div>
                        <div class="col">
                            <label for="inputEmail" class="form-label fw-bold fs-5">Nouvelle adresse email</label>
                            <input type="email" class="form-control" id="inputEmail" area-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Email actuel : {{ $user->email }}
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row mx-auto">
                    <div class="col d-flex justify-content-between m-2 px-5">
                        <a href="{{ route('modifier-infos', Auth::user()) }}"><button
                                class="btn btn-lg btn-primary">Modifier mes
                                informations</button></a>
                        <a href="{{ route('supprimer-compte', Auth::user()) }}"><button class="btn btn btn-danger">Supprimer
                                mon
                                compte</button></a>
                    </div>

                </div>
    </section>
@endsection
