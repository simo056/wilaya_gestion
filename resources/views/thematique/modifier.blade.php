@extends('layouts.master')
@section('content')
<div class="container">
<div class='row'>
    <div class='col-12'>
    <form method='post' action="{{url('/save_modifier_thematique',['id' => $thematique->id_thematiques])}}">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Modifier Thématiques</div>
                <div class='col-12 p-3 mb-12 '>
    <div class="form-group">
        <input type="text" class="form-control" name="nom_thematique" id='nom_thematique' placeholder="Nome de thematique*"  name='nom_thematique' value='{{$thematique->nom_thematiques}}' />
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Modifier Thematiques">
    </div>
</div>
</form>
        	
</div>
</div>
</div>
@endsection