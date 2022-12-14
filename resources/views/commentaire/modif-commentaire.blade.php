@extends('layouts.app')

@section('content')
    <section class="container mx-auto p-5">

        {{-- AFFICHAGE DU COMMENTAIRE A MODIFIER --}}
        <div class="row mx-auto">
            <div class="card w-75 mx-auto p-4 text-center bg-white" style="width: 18rem;">
                <h2 class="m-2 mb-3">Commentaire actuel</h2>
                <h5 class="card-title m-2">{{ $commentaire['tags'] }}</h5>
                <img src="/images/{{ $commentaire->image }}" class="card-img-top mx-auto" style="object-fit:contain; max-width: 300px; max-height: 300px;" alt="image">
                <div class="card-body p-2 mx-auto">
                    <p class="card-text">{{ $commentaire['auteur'] }}<br>
                        {{ $commentaire['contenu'] }}</p>
                </div>
            </div>
        </div>

        <!-- MODIFIER MON COMMENTAIRE-->
        <div class="row mx-auto bg-danger border rounded m-5 p-5">
            <div class="row">
                <h2 class="text-center text-uppercase">Modifier mon commentaire</h2>
            </div>
            <div class="row">
                <form action="{{ route('commentaire.update', $commentaire) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row text-center mx-auto mt-4">
                        <label for="contenu" class="form-label fw-bold fs-5">Corps du commentaire</label>
                        <textarea name="contenu" id="message" type="text" class="form-control">{{ $commentaire->contenu }}</textarea>
                    </div>
                    <div class="row text-center mx-auto mt-4">
                        <label for="image" class="form-label fw-bold fs-5">Image (facultatif)</label>
                        <input name="image" type="file" class="form-control" id="image"
                            value="{{ $commentaire->image }}">
                    </div>
                    <div class="row text-center mx-auto mt-4">
                        <label for="tags" class="form-label fw-bold fs-5">Tags (facultatif)</label>
                        <input name="tags" type="text" class="form-control" id="tags"
                            value="{{ $commentaire->tags }}">
                    </div>
                    <div class="row text-center mx-auto mt-4">
                        <button class="btn btn-lg btn-warning mx-auto" type="submit">Valider la modification</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
