@extends('layouts.master')
@section('content')
<div class="cprimaryontainer">

    <div class="row justify-content-center" >
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> Utilisateurs</div>

                <div class="card-body">
                        <div>

                            
                            <a href="{{ route('utilisateur.create') }}" class="btn btn-primary">Ajouter Un Utilisateur</a>
                            <h1 class="card-title" >Liste Des Utilisateurs </h1>
                                <table id="myTable" class="table table-bordered  table-stripped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            @if($user->etat != -1)
                                            @if($user->id_role != 1)
                                            <tr>
                                                <td>{{ $user->id_user }}</td>
                                                <td>{{ $user->nom_user }} {{ $user->prenom_user }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->Role->nom_role }}</td>
                                                <td class="d-flex justify-content-center align-items-center">
                                                    <a class="btn btn-sm btn-primary" href="#" role="button">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a class="btn btn-sm btn-warning " href="#" role="button">
                                                        <i class="fa fa-edit"></i>
                                                    </a>  
                                                    
                                                        
                                                    <a  class="btn btn-sm btn-danger" href="{{url('/utilisateurs',['id' => $user->id_user ])}}" role ="button"> 
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                                     
                                                    
                                            </tr>
                                            @endif
                                            @endif
                                         @endforeach
                                    </tbody>
                                </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
