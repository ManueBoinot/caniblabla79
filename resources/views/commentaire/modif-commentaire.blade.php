@extends('layouts.app')

@section('title')
CANIBLABLA79 - Modifier commentaire
@endsection

@section('content')
    <section class="container mx-auto p-5">

        {{-- AFFICHAGE DU COMMENTAIRE A MODIFIER --}}
        <div class="row mx-auto text-secondary">
            <div class="card w-75 mx-auto p-4 text-center " style="width: 18rem;">
                <h2 class="m-2 mb-3">Commentaire actuel</h2>
                <h5 class="card-title m-2">#{{ implode(' #',(explode(' ', $commentaire->tags)))}}</h5>
                <img src="/images/{{ $commentaire->image }}" class="card-img-top mx-auto" style="object-fit:contain; max-width: 300px; max-height: 300px;" alt="image">
                <div class="card-body p-2 mx-auto">
                    <p class="card-text">{{ $commentaire['auteur'] }}<br>
                        {{ $commentaire['contenu'] }}</p>
                </div>
            </div>
        </div>

        <!-- MODIFIER MON COMMENTAIRE-->
        <div class="row mx-auto bg-warning border rounded m-5 p-5">
            <div class="row">
                <h2 class="text-center text-uppercase">Modifier mon commentaire</h2>
            </div>
            <div class="row">
                <form action="{{ route('commentaire.update', $commentaire) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row text-center mx-auto mt-4">
                        <label for="contenu" class="form-label fw-bold fs-5">Corps du commentaire</label>
                        <textarea name="contenu" id="message" type="text" class="form-control text-secondary">{{ $commentaire->contenu }}</textarea>
                    </div>
                    <div class="row text-center mx-auto mt-4">
                        <label for="image" class="form-label fw-bold fs-5">Image (facultatif)</label>
                        <input name="image" type="file" class="form-control text-secondary" id="image"
                            value="{{ $commentaire->image }}">
                    </div>
                    <div class="row text-center mx-auto mt-4">
                        <label for="tags" class="form-label fw-bold fs-5">Tags (facultatif)</label>
                        <input name="tags" type="text" class="form-control text-secondary" id="tags"
                            value="#{{ implode(' #', (explode(' ', $commentaire->tags)))}}">
                    </div>
                    <div class="row text-center mx-auto mt-4">
                        <button class="btn btn-lg btn-success mx-auto" type="submit">Valider la modification</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
