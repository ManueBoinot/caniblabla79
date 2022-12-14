@extends('layouts.app')

@section('title')
    <h1 class="text-center text-uppercase text-info">ACCUEIL</h1>
@endsection

@section('content')
    <section class="container">

        {{-- POSTER UN MESSAGE --}}
        <section class="mx-auto bg-light">
            @include('message.new-message')
        </section>

        {{-- TOUS LES MESSAGES --}}
        <section class="mx-auto bg-light">
            <h2 class="text-center p-3">DERNIERS MESSAGES</h2>
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
