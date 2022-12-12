@extends('layouts.app')

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

        </div>
    </section>
@endsection
