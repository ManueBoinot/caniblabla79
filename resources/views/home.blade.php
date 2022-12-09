@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            {{-- EN-TETE TABLEAU DE BORD --}}
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Tableau de bord') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('Vous êtes connecté(e) !') }}
                        </div>
                    </div>
                </div>
            </div>

            {{-- NOUVEAU MESSAGE --}}
            <div class="row">
                @yield('new-message')
                {{-- messages sous forme de card --}}
                <h1>Blah1</h1>
            </div>

            {{-- TOUS LES MESSAGES --}}
            <div class="row">
                @yield('all-messages')
                {{-- commentaires sous forme de card --}}
                <h1>Blah2</h1>
            </div>

        </div>
    </section>
@endsection
