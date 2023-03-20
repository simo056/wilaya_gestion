
@extends('layouts.master')
@section('content')

<div class="container">
    <a href="/Corbeille" class="btn btn-primary btn-lg active" style='float:right' role="button" aria-pressed="true">Corbeille</a>
    <a href="/ajouter" class="btn btn-primary btn-lg active" style='float:right' role="button" aria-pressed="true">Ajouter une activité</a>
    
    <table class="table table-striped">  
        <tr>
            <th >Objet</th>
            <th >Utilisateur</th>
            <th >Date Debut</th>
            <th >Statut</th>

            <th >Actions</th>
            <th>Pieces Jointes</th>
        </tr>
        @foreach($activites as $act)
            @if($act ->affichage == 0)
                <tr>
                    <td >{{ $act->objet }}</td>
                    <td>{{Auth::user()->nom_user }} {{Auth::user()->prenom_user }}</td>
                    <td>{{ $act->date_debut}}</td>
                    <td>@if($act->status == 0)
                            <p>en cours </p>
                        @elseif($act->status == 1)
                            <p>Résolu</p>
                        @else
                            <p>Annulée</p>
                        @endif
                    </td>
                    <td>
                        @if  ($act-> piece_joints  != "")
                            <a  class='text-primary' href="{{asset('uploadedimages/'.$act->id_activites.'/'.$act->piece_joints)}}" download="{{$act->piece_joints}}">Télécharger</a>
                        @else
                            <p class='text-danger'>Aucune fichier</p>
                        @endif
                    </td>
                    <td>
                        @if ($act->status == 0)
                        <a class="btn btn-primary" href="/annuler/{$act->id_activites}" role="button">Annuler</a>
                        <a class="btn btn-primary"  href="/resolu/{$act->id_activites}"  role="button">Résolu</a>
                        <a class="btn btn-primary" href="/modifier/{$act->id_activites}"  role="button">Modifier</a>
                        <a class="btn btn-primary"  href="/supprimer/{$act->id_activites}"    role="button">Supprimer</a>
                        <a class="btn btn-primary"  href="/consulter/{$act->id_activites}"   role="button">Consulter</a>
                        @else
                        <a class="btn disabled" href="{{url('/annuler',['id' => $act->id_activites])}}" role="button" disabled ="disabled" >Annuler</a>
                        <a class="btn disabled" href="{{url('/resolu',['id' => $act->id_activites])}}" role="button" disabled ="disabled">Résolu</a>
                        <a class="btn disabled" href="{{url('/modifier',['id' => $act->id_activites])}}"  role="button" disabled ="disabled">Modifier</a>
                        <a class="btn btn-primary" href="{{url('/supprimer',['id' => $act->id_activites])}}"  role="button" disabled="disabled">Supprimer</a>
                        <a class="btn btn-primary" href="{{url('/consulter',['id' => $act->id_activites])}}" role="button">Consulter</a>
                        @endif
                     </td> 

                </tr>
            @endif
        @endforeach
    </table>
</div>

@endsection
