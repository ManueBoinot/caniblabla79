{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')


@section('new-message')
    <section class="container mx-auto p-5" style="background-color: rgba(255,255,255,0.8)">

        <!-- NOUVEAU MESSAGE-->
        <div class="row gap-5 p-5 bg-light">
            <div class="col bg-light p-5 border">
                <div class="row mb-3">
                    <h2 class="mb-5 text-center">Publier un nouveau message</h2>
                </div>
                <div class="row mb-3">
                    <form action="{{ route('createMessage', Auth::user()) }}" method="POST">
                        @method('put') @csrf
                        <div class="row">
                            <label for="message" class="form-label fw-bold fs-5">Corps du message</label>
                            <input name="message" id="message" type="text" class="form-control">
                        </div>
                        <div class="row">
                            <label for="image" class="form-label fw-bold fs-5">Image (facultatif)</label>
                            <input name="image" type="file" class="form-control" id="image">
                        </div>
                        <div class="row">
                            <label for="tags" class="form-label fw-bold fs-5">Tags (facultatif)</label>
                            <input name="tags" type="text" class="form-control" id="tags">
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit" action="{{ route('home', Auth::user()) }}">Poster le message</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
