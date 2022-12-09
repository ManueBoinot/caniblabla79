{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
    Modifier-infos
@endsection

@section('content')
    {{-- écrire ici le code de cette page --}}
    <section class="container mx-auto p-5" style="background-color: rgba(255,255,255,0.8)">

        <!-- MODIFIER INFORMATIONS-->
        <div class="row gap-5 p-5 bg-light">
            <div class="col bg-light p-5 border">
                <div class="row mb-3">
                    <h2 class="mb-5 text-center">MODIFIER MES INFORMATIONS</h2>
                </div>
                <div class="row mb-3">
                    <form action="{{ route('user.update', Auth::user()) }}" method="POST">
                        @method('put') @csrf
                        <div class="col">
                            <label class="form-label fw-bold fs-5">Nouveau nom</label>
                            <input name="nom" type="text" class="form-control" value='{{ $user->nom }}'>
                        </div>
                        <div class="col">
                            <label for="inputPrenom" class="form-label fw-bold fs-5">Nouveau prénom</label>
                            <input name="prenom" type="text" class="form-control" id="inputPrenom"
                                value='{{ $user->prenom }}'>
                        </div>
                        <div class="col">
                            <label for="inputPseudo" class="form-label fw-bold fs-5">Nouveau pseudo</label>
                            <input name="pseudo" type="text" class="form-control" id="inputPseudo"
                                value='{{ $user->pseudo }}'>
                        </div>
                        <div class="col">
                            <label for="inputEmail" class="form-label fw-bold fs-5">Nouvelle adresse email</label>
                            <input name="email" type="email" class="form-control" id="inputEmail"
                                value="{{ $user->email }}">
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit"
                            action="{{ route('user.update', Auth::user()) }}">Modifier mes
                            informations</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- MODIFIER MOT DE PASSE -->
        <div class="row gap-5 p-5 bg-light">
            <div class="col bg-light p-5 border">
                <div class="row mb-3">
                    <h2 class="mb-5 text-center">MODIFICATION DE MOT DE PASSE</h2>
                </div>
                <div class="row mb-3">
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
                        <div class="col">
                            <label class="form-label fw-bold fs-5">Ancien mot de passe</label>
                            <input type="password" name="old_password"
                                class="form-control @error('old_password') is-invalid @enderror">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label fw-bold fs-5">Nouveau mot de passe</label>
                            <input type="password" name="new_password"
                                class="form-control @error('new_password') is-invalid @enderror">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label fw-bold fs-5">Confirmez le nouveau mot de passe</label>
                            <input type="password" name="new_password_confirmation" class="form-control">
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit"
                            action="{{ route('profil', Auth::user()) }}">Modifier mon mot de passe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
