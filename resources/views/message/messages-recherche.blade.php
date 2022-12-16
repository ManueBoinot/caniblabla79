@extends('layouts.app')

@section('title')
CANIBLABLA79 - Recherche de messages
@endsection

@section('content')
    <section class="container text-center mx-auto">
        
        <h1 class="text-center text-uppercase text-info">RÉSULTAT DE LA RECHERCHE</h1>

        @if(count($messages) > 0)

        @foreach ($messages as $message)
            {{-- AFFICHAGE DES MESSAGES --}}
            <div class="card w-75 mx-auto p-3 my-3 ">

                {{-- MESSAGE IMAGE --}}
                <img src="/images/{{ $message->image }}" class="card-img-top mx-auto" style="object-fit:contain; max-width: 300px; max-height: 300px;" alt="image">

                {{-- MESSAGE BODY --}}
                <div class="card-body p-2 mx-auto">

                    {{-- message title --}}
                    <h5 class="card-title p-2 fw-bold">#{{ implode(' #', (explode(' ', $message->tags)))}}</h5>

                    {{-- message text --}}
                    <div class="card-text">
                        <p class="fst-italic">Posté par <span class="fw-bold">{{ $message->user->pseudo }}</span> le
                            {{ date_format($message->created_at, 'd-m-Y H:i:s') }}</p>
                        <p>{{ $message->contenu }}</p>
                    </div>
                </div>
            </div>
        @endforeach

        @else 

        <h2 class="text-center fs-2 m-3 text-warning">Il n'y a aucun résultat pour cette recherche.</h2>

        @endif

        {{-- PAGINATION DES MESSAGES --}}
        <div class="d-flex justify-content-center">
            {{ $messages->links() }}
        </div>
    </section>
    </section>
@endsection
