@extends("base")
@section('title', 'Ajouter un evenement')
@section("content")
<nav>
    <a href="{{route('evenements.store')}}">Affiche les Evenements</a>
</nav>
    <section>
        <div class="wrap_form">
            <form action="{{route('evenements.store')}}" method="post">
             @csrf
                <div class="input-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" id="" required>
                </div>
                <div  class="input-group">
                    <label for="">Date de Démarrage</label>
                    <input type="date" name="dated" id="" required>
                </div>
                <div  class="input-group">
                    <label for="">Date de Fin</label>
                    <input type="date" name="datef" id="" required>
                </div>
                <div  class="input-group">
                    <label for="">Description</label>
                    <input type="text" name="desc" id="" required>
                </div>
                <div  class="input-group">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </section>
    
@stop