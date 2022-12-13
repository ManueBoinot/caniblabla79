{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
<h1 class="text-center text-uppercase text-info">PROFIL PUBLIC DE {{$user->pseudo}}</h1>
@endsection

@section('content')


@endsection
