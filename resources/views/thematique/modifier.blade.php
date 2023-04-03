@extends('layouts.master')
@section('content')
<div class="container">
<div class='row'>
    <div class='col-12'>
    <form method='post' action="/save_modifier_thematique">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Modifier Thématiques</div>
                <div class='col-12 p-3 mb-12 '>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id_thematiques" id='id_thematiques'   value='{{$thematique->id_thematiques}}' />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nom_thematiques" id='nom_thematiques' placeholder="Nome de thematique"  value='{{$thematique->nom_thematiques}}' />
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