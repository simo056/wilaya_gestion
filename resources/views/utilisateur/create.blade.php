@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter un Utilisateur</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <form action="{{ route('utilisateur.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom_user">Nom</label>
                            <input type="text" name="nom_user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom_user">Prénom</label>
                            <input type="text" name="prenom_user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Rôle</label>
                            <select name="role" class="form-control" required>
                                <option value="">Sélectionnez un rôle</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id_role }}">{{ $role->nom_role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        @if(session('success'))
                             <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection