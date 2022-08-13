@extends("base")
@section('title', 'Acceuil')
@section("content")
<nav>
    <a href="{{route('evenements.create')}}">Ajouter un Evenement</a>
    <a href="{{route('evenements.store')}}">Affiche les Evenements</a>
</nav>
    <h2>Evenements</h2>

    @stop
