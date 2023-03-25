
@extends('layouts.master')
@section('content')

<div class="container">
    <h1>Corbeille</h1>
    <table class="table table-striped">  
        <tr>
            <th >Objet</th>
            <th >Utilisateur</th>
            <th >Date Debut</th>
            <th >Date fin</th>
            <th >Statu</th>
            <th ></th>
        </tr>
        @foreach($activites as $act)
            @if($act ->affichage != 0)
                <tr>
                    <td >{{ $act->objet }}</td>
                    <td>{{Auth::user()->nom_user }} {{Auth::user()->prenom_user }}</td>
                    <td>{{ $act->date_debut}}</td>
                    <td>{{ $act->date_fin}}</td>
                    <td >déjà supprimer</td>
                    <th ><a class="btn btn-info" href="{{url('/restaurer',['id' => $act->id_activites])}}" role="button">Restaurer</a></th>
                </tr>
            @endif
        @endforeach
    </table>
</div>

@endsection