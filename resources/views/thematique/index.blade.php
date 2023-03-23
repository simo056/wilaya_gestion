@extends('layouts.master')
@section('content')
<div class="container">
<form method='post' action="{{url('/ajouter_thematique')}}">
    @csrf
<div class='row'>
    <div class='col-12'>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Thématiques</div>
                <div class='col-12 p-3 mb-12 bg- '>
    <div class="form-group">
        <input type="text" class="form-control" name="nom_thematique" id='nom_thematique' placeholder="Nome de thematique*"  />
    </div>
    <div class="form-group">
        <!-- <input type="submit"  class="btnSubmit" value="Ajouter une Thematiques" /> -->
        <input class="btn btn-primary" type="submit" value="Ajouter une Thematiques">
    </div>
                @foreach($thematique as $th)
                    @if($th->etat == 0)
                    <div class="card-body">
                            <span >    {{$th->nom_thematiques}}</span>
                            <span class="float-right">    <a class="btn btn-secondary"  href="{{url('/supprimer_thematique',['id' => $th->id_thematiques])}}" role="button">Supprimer</a></span>
                            <span class="float-right">    <a class="btn btn-secondary"  href="{{url('/Modifier_thematique',['id' => $th->id_thematiques])}}" role="button">Modifier</a></span>
                    </div>
                    @endif
                @endforeach
                
            </div>
        </div>
    </div>
</div>

</form>
        	
</div>
</div>
</div>
@endsection