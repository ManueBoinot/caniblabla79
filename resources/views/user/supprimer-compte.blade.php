{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
CANIBLABLA79 - Supprimer compte
@endsection

@section('content')
    <section class="text-center">
        <h1 class="text-center">Supprimer votre compte</h1>
        <form action="{{ route('user.destroy', Auth::user()) }}" method="POST">
            @csrf @method('delete')
            <p class="text-danger">Êtes-vous sûr(e) de vouloir supprimer votre compte ?<br>
                Vos informations seront définitivement supprimées.
            </p>
            <button type="submit" class="btn btn-lg btn-danger">Je confirme
                vouloir supprimer mon compte</button>
        </form>
    </section>
@endsection
