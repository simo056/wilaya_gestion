
@extends('layouts.master')
@section('content')

<div class="container">
    <h1>consultation</h1>
    <table class="table">

  <tbody>
    <tr>
      <th scope="row">objet :</th>
      <td>{{$activite->objet}}</td>
    </tr>
    <tr>
      <th scope="row">description :</th>
      <td>{{$activite->description}}</td>
    </tr>
    <tr>
    <th scope="row">date_debut  :</th>
      <td>{{$activite->date_debut}} </td>
    </tr>
    <tr>
    <th scope="row">date fin  :</th>
      <td>{{$activite->date_fin}} </td>
    </tr>
    <tr>
    <th scope="row">commentaire  :</th>
      <td>{{$activite->commentaire}} </td>
    </tr>
    <tr>
    <th scope="row">thematiques  :</th>
      <td>{{$thematique->nom_thematiques}} </td>
    </tr>
    <tr>
    <th scope="row">utilisateur  :</th>
      <td>{{$user->nom_user}}  {{$user->prenom_user}}</td>
    </tr>
  </tbody>
</table>
<button class='btn btn-primary' onclick="window.print()">Imprimer cette page</button>
</div>

@endsection