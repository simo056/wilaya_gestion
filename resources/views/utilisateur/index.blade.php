@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> Utilisateur</div>

                <div class="card-body">
                        <div>

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
                                            <tr>
                                                <td>{{ $user->id_user }}</td>
                                                <td>{{ $user->nom_user }} {{ $user->prenom_user }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->id_role }}</td>
                                                <td class="d-flex justify-content-center align-items-center">
                                                    <a class="btn btn-sm btn-primary" href="#" role="button">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a class="btn btn-sm btn-warning " href="#" role="button">
                                                        <i class="fa fa-edit"></i>
                                                    </a>  
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
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
