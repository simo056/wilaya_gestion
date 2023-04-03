@extends('layouts.master')
@section('content')
<div class="container">
<div class='row'>
    <div class='col-12'>
    <form method='post' action="/save_edite">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Modifier Utilisateur</div>
                <div class='col-12 p-3 mb-12 '>
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="id_user" id='id_user'   value='{{$utilisateur->id_user }}' />
                    </div>
                    <div class="form-group">
                        <label for="">nom</label>
                        <input type="text" class="form-control" name="nom_user" id='nom_user' placeholder="nom_user"  value='{{$utilisateur->nom_user}}' />
                    </div>
                    <div class="form-group">
                        <label for="">prenom</label>
                        <input type="text" class="form-control" name="prenom_user" id='prenom_user' placeholder="prenom de thematique"  value='{{$utilisateur->prenom_user}}' />
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="text" class="form-control" name="email" id='email' placeholder="Nome de thematique"  value='{{$utilisateur->email}}' />
                    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Modifier utilisateurs">
    </div>
</div>
</form>
        	
</div>
</div>
</div>
@endsection