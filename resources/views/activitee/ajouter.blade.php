
@extends('layouts.master')
@section('content')

<div class="container-md">
    <form method='post' action='/saveajouter' enctype="multipart/form-data">
    @csrf 

      <div class="form-group">
        <label for="utilisateur">utilisateur</label>
        <input type="text" class="form-control" id="utilisateur" value='{{Auth::user()->nom_user }} {{Auth::user()->prenom_user }}' disabled>
      </div>

      <div class="form-group">
        <label for="objet">Objet</label>
        <input type="text" class="form-control" id="objet" name='objet'>
        @error('objet')
        <spam class='text-danger'>{{$message}}</spam>
        @enderror
      </div>


      <div class="form-group">
      <label for="thematique">thématique</label>
      <select class="custom-select" id='thematique' name='thematique'>
        <!-- <option selected>Choisir une thématique</option> -->
        @foreach ($thematiques as $th)
          @if($th->etat != -1)
            <option value="{{$th->id_thematiques}}">{{$th->nom_thematiques}}</option>
          @endif
        @endforeach
      </select>
      @error('thematique')
        <spam class='text-danger'>{{$message}}</spam>
        @enderror
      </div>


      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" rows="3" name='description'></textarea>
        @error('description')
        <spam class='text-danger'>{{$message}}</spam>
        @enderror
      </div>


      <div class="custom-file">
        <input type="file" class="custom-file-input" id="piece_joints" name='piece_joints'>
        <label class="custom-file-label" for="piece_joints ">Choose file</label>
      </div>
    </div>

    <br></br>
    <div class='row'>
      <div class='col-10'>
        <input class="btn btn-primary" type="submit" style='float:right' value="Enregistrée">
      </div>
    </div>  
  </form>
</div>

@endsection

