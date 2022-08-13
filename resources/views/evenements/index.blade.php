@extends("base")
@section('title', 'liste des évènements')
@section("content")
<nav>
    <a href="{{route('evenements.create')}}">Ajouter un Evenement</a>
</nav>

<table>
    <thead>
        <th>ID</th>
        <th>Nom de l'Evènement</th>
        <th>Date de demarrage</th>
        <th>Date de fin</th>
        <th>Description</th>
    </thead>
    <tbody>
    @foreach($evenements as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->nom}}</td>
            <td>{{$prod->date_demarrage}}</td>
            <td>{{$prod->date_fin}}</td>
            <td>{{$prod->description}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop