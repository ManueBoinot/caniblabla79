{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
    CANIBLABLA79 - Modifier infos
@endsection

@section('content')
    {{-- écrire ici le code de cette page --}}
    <section class="container mx-auto p-5 w-50">

        <!-- MODIFIER INFORMATIONS-->
        <div class="mb-5 text-center mx-auto bg-warning border p-5">
            <h2 class="text-center mb-3 text-white">MODIFIER MES INFORMATIONS</h2>

            <div class="mb-3">
                <form action="{{ route('user.update', Auth::user()) }}" method="POST" enctype="multipart/form-data">
                    @method('put') @csrf
                    <div class="my-2">
                        <label for="inputImage" class="form-label fw-bold fs-5">Nouvel avatar</label>
                        <input name="inputImage" type="file" class="form-control text-secondary" id="inputImage"
                            value="{{ $user->image }}">
                    </div>
                    <div class="my-2">
                        <label for="inputNom" class="form-label fw-bold fs-5">Nouveau nom</label>
                        <input name="nom" type="text" class="form-control text-secondary" id="inputNom"
                            value='{{ $user->nom }}'>
                    </div>
                    <div class="my-2">
                        <label for="inputPrenom" class="form-label fw-bold fs-5">Nouveau prénom</label>
                        <input name="prenom" type="text" class="form-control text-secondary" id="inputPrenom"
                            value='{{ $user->prenom }}'>
                    </div>
                    <div class="my-2">
                        <label for="inputPseudo" class="form-label fw-bold fs-5">Nouveau pseudo</label>
                        <input name="pseudo" type="text" class="form-control text-secondary" id="inputPseudo"
                            value='{{ $user->pseudo }}'>
                    </div>
                    <div class="my-2">
                        <label for="inputEmail" class="form-label fw-bold fs-5">Nouvelle adresse email</label>
                        <input name="email" type="email" class="form-control text-secondary" id="inputEmail"
                            value="{{ $user->email }}">
                    </div>
                    <div class="my-2">
                        <button class="btn btn-lg btn-success m-2" type="submit"
                            action="{{ route('user.update', Auth::user()) }}">Modifier mes
                            informations</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- MODIFIER MOT DE PASSE -->
        <div class="text-center mx-auto bg-warning border p-5">
            
            <h2 class="text-center mb-3 text-white">MODIFICATION DE MOT DE PASSE</h2>

            <div class="div">
                <form action="{{ route('updatePassword', Auth::user()) }}" method="POST">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="my-2">
                        <label class="form-label fw-bold fs-5">Ancien mot de passe</label>
                        <input type="password" name="old_password" class="form-control text-secondary">
                    </div>

                    <div class="my-2">
                        <label class="form-label fw-bold fs-5">Nouveau mot de passe</label>
                        <input type="password" name="new_password" class="form-control text-secondary">
                    </div>

                    <div class="my-2">
                        <label class="form-label fw-bold fs-5">Confirmez le nouveau mot de passe</label>
                        <input type="password" name="new_password_confirmation" class="form-control text-secondary">
                    </div>

                    <button class="btn btn-lg btn-success m-2" type="submit"
                        action="{{ route('profil', Auth::user()) }}">Modifier
                        mon mot de passe</button>
                </form>
            </div>

        </div>
    </section>
@endsection
