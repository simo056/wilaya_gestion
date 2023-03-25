
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
                        <a class="btn btn-primary" href="{{url('/annuler',['id' => $act->id_activites])}}" name='annuler' role="button">Annuler</a>
                        <a class="btn btn-primary"  href="{{url('/resolu',['id' => $act->id_activites])}}" name='resolu' role="button">Résolu</a>
                        <a class="btn btn-primary" href="{{url('/modifier',['id' => $act->id_activites])}}">Modifier</a>
                        <a class="btn btn-danger"  href="{{url('/supprimer',['id' => $act->id_activites])}}" name='supprimer'   role="button">Supprimer</a>
                        <a class="btn btn-primary"  href="{{url('/consulter',['id' => $act->id_activites])}}"   role="button">Consulter</a>
                        @else
                        <a class="btn disabled" href="{{url('/annuler',['id' => $act->id_activites])}}" role="button" disabled ="disabled" >Annuler</a>
                        <a class="btn disabled" href="{{url('/resolu',['id' => $act->id_activites])}}" role="button" disabled ="disabled">Résolu</a>
                        <a class="btn disabled" href="{{url('/modifier',['id' => $act->id_activites])}}"  role="button" disabled ="disabled">Modifier</a>
                        <a class="btn btn-primary" href="{{url('/supprimer',['id' => $act->id_activites])}}"  role="button" name='supprimer'>Supprimer</a>
                        <a class="btn btn-primary" href="{{url('/consulter',['id' => $act->id_activites])}}" role="button">Consulter</a>
                        @endif
                     </td> 

                </tr>
            @endif
        @endforeach
    </table>
    <script> 
        let supprimer = document.getElementsByName("supprimer"); 
        let annuler = document.getElementsByName('annuler'); 
        let resolu = document.getElementsByName('resolu'); 
         
        supprimer.forEach(myFunction); 
        function myFunction(supp) { 
            supp.addEventListener('click',(event) => { 
            let c = confirm('Voulez-vous Vraiment supprimer cet Activité'); 
            if (c != true ){ 
                event.preventDefault(); 
            } 
            });} 
 
 
        annuler.forEach(myFunction_2); 
        function myFunction_2(annu) { 
            annu.addEventListener('click',(e)=>{ 
            let commentaires = prompt("Annuler : Veuillez saisir vos commentaires", ""); 
            if (commentaires == null) { 
                e.preventDefault(); 
        }});} 
 
 
        resolu.forEach(myFunction_3); 
        function myFunction_3(res) { 
            res.addEventListener('click',(e)=>{ 
            let commentaires = prompt("Résolu : Veuillez saisir vos commentaires", ""); 
            if (commentaires == null) { 
                e.preventDefault(); 
        }});} 
 
 
    </script>
</div>

@endsection
