
@extends('layouts.master')
@section('content')

<div class="container-md">
    <form method='post' action='/savemodifier'>
    @csrf 

      <div class="form-group">
        <label for="objet">Objet</label>
        <input type="text" class="form-control" id="objet" value='{{ $Activite->objet }}'  name='objet' >
      </div>

      <div class="form-group">
      <label for="thematique">thématique</label>
      <select class="custom-select" id='thematique' name='thematique'>
        @foreach ($thematiques as $a)
        <option value="{{$a->id_thematiques}}">{{$a->nom_thematiques}}</option>
        @endforeach
      </select>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" rows="3" name='description'  >{!! $Activite->description !!}</textarea>
      </div>


      <div class="form-group">
        <label for="commentaire">Commentaire</label>
        <textarea class="form-control" id="commentaire" rows="3" name='commentaire' value='{{ $Activite->commentaire }}'></textarea>
      </div>


      <div class="custom-file">
        <input type="file" class="custom-file-input" id="piece_joints" name='piece_joints'>
        <label class="custom-file-label" for="piece_joints ">Choose file</label>
      </div>
    </div>

    <br></br>
    <div class='row'>
      <div class='col-10'>
        <input class="btn btn-secondary" type="submit" value="Enregistrée">
      </div>
    </div>  
  </form>
</div>

@endsection
