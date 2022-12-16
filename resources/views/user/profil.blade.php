{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
    CANIBLABLA79 - Profil public
@endsection

@section('content')
    <section class="container mx-auto w-75 text-warning">

        <h1 class="text-center text-uppercase text-info m-5">PROFIL DE {{ $user->pseudo }}</h1>

        <!-- INFORMATIONS UTILISATEURS -->
        <div class="row d-flex text-center align-items-center border border-warning p-5" id="infos-user">

            <div class="col-4">
                <img class="img-thumbnail m-2" style="object-fit: contain; height: 300px; width: 300px; border-radius: 50%;"
                    src="/images/{{ $user->image }}" alt="avatar de {{ $user->pseudo }}">
            </div>

            <div class="col-8">
                <h2 class="fs-1 mb-5 text-white">{{ $user->pseudo }}</h2>
                <p class="fs-5">Membre depuis le {{ date_format($user->created_at, 'd-m-Y') }}</p>
                <p class="fs-5">Nombre de messages postés : {{ count($user->messages) }}</p>
                <p class="fs-5">Nombre de commentaires postés : {{ count($user->commentaires) }}</p>
            </div>

        </div>


        <div class="row mt-5 border border-warning">
            <h2 class="text-center p-3">MESSAGES POSTÉS PAR <span
                    class="text-white fw-bold text-uppercase">{{ $user->pseudo }}</span></h2>
        </div>

        @if (count($user->messages) > 0)
            @foreach ($user->messages as $message)
                <div class="row d-flex text-center align-items-center bg-warning" id="messages-user">
                    {{-- AFFICHAGE DES MESSAGES --}}
                    <div class="col-9 mx-auto rounded" id="message-et-commentaire">

                        <div id="message">

                            <div class="card my-3 px-5 py-3 rounded text-center bg-dark text-warning">
                                <div class="my-2 d-flex justify-content-center">
                                    <img class="img-thumbnail m-2"
                                        style="object-fit: contain; height: 70px; width: 70px; border-radius: 50%;"
                                        src="/images/{{ $message->user->image }}"
                                        alt="avatar de {{ $message->user->pseudo }}">
                                    <p class="my-auto text-center fst-italic">Posté le
                                        {{ date_format($message->created_at, 'd-m-Y H:i:s') }}</p>
                                </div>

                                {{-- MESSAGE IMAGE --}}
                                <div class="image">
                                    <img src="/images/{{ $message->image }}" class="card-img-top mx-auto rounded"
                                        style="object-fit:contain; max-width: 500px; max-height: 500px;" alt="image">
                                </div>

                                {{-- MESSAGE BODY --}}
                                <div class="card-body w-100 p-2 mx-auto">

                                    {{-- message title --}}
                                    <h3 class="card-title p-2 fw-bold">#{{ implode(' #', explode(' ', $message->tags)) }}
                                    </h3>

                                    {{-- message text --}}
                                    <div class="card-text">
                                        <p>{{ $message->contenu }}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        @else
            <h3 class="text-center m-3">{{ $user->pseudo }} n'a encore posté aucun message.</h3>
        @endif

    </section>
@endsection
