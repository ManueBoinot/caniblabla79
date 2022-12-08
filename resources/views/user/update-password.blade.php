{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
    Modifier-password
@endsection

@section('content')
    {{-- écrire ici le code de cette page --}}
    <section class="container mx-auto p-5" style="background-color: rgba(255,255,255,0.8)">
        <div class="row gap-5 p-5 bg-light">
            <!-- INFORMATIONS UTILISATEURS -->
            <div class="col bg-light p-5 border">
                <div class="row mb-3">
                    <h2 class="mb-5 text-center">MODIFICATION DE MOT DE PASSE</h2>
                </div>
                <div class="row mb-3">
                    <form action="{{ route('updatePassword', Auth::user()) }}" method="POST">
                        @csrf
                        <div class="col">
                            <label class="form-label fw-bold fs-5">Mot de passe actuel</label>
                            <input type="password" name="password1" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label fw-bold fs-5">Nouveau mot de passe</label>
                            <input type="password" name="password2" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label fw-bold fs-5">Confirmez le nouveau mot de passe</label>
                            <input type="password" name="password3" class="form-control">
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit"
                            action="{{ route('profil', Auth::user()) }}">Modifier mon mot de passe</button>
                    </form>
                </div>
            </div>
    </section>
@endsection
