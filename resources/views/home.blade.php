@extends('layouts.app')

@section('title')
CANIBLABLA79 - Accueil
@endsection

@section('content')
    <section class="container">

        <h1 class="text-center text-info m-5 fs-1">Bienvenue sur CANIBLABLA79 <span class="fw-bold">{{ Auth::user()->pseudo }}</span> !</h1>

        {{-- POSTER UN MESSAGE --}}
        <section class="mx-auto">
            @include('message.new-message')
        </section>

        {{-- TOUS LES MESSAGES --}}
        <section class="mx-auto">
            <h2 class="text-center fs-1 text-warning mt-5 mb-0 border border-warning w-75 mx-auto py-3">DERNIERS MESSAGES</h2>
            @foreach ($messages as $message)
                @include('message.message')
            @endforeach

            {{-- PAGINATION DES MESSAGES --}}
            <div class="d-flex justify-content-center">
                {{ $messages->links() }}
            </div>
        </section>

    </section>
@endsection
