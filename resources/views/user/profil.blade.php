{{-- je me base sur la structure de la page app.blade --}}
@extends('layouts.app')

{{-- inclusion dynamique du titre --}}
@section('title')
Profil
@endsection

@section('content')
{{-- écrire ici le code de cette page --}}
<h1 class="text-center">Profil de {{$user->pseudo}}</h1>

@endsection
