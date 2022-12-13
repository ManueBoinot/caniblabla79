@extends('layouts.app')

@section('title')
    <h1 class="text-center text-uppercase text-info">ACCUEIL</h1>
@endsection

@section('content')
    <section>
        <div class="container bg-light">

            {{-- POSTER UN MESSAGE --}}
            <div class="row mx-auto">
                @include('message.new-message')
            </div>

            {{-- TOUS LES MESSAGES --}}
            <div class="row mx-auto mt-5">
                <h1 class="text-center">DERNIERS MESSAGES</h1>
                @foreach ($messages as $message)
                    @include('message.message')
                @endforeach
            </div>


            <div class="d-flex justify-content-center">
                {{ $messages->links() }}
            </div>
            
        </div>
    </section>
@endsection
