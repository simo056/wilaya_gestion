<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thematique;
use stdClass;

class ThematiqueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $n = Thematique::all();
        return view('thematique.index',['thematique'=>$n]);
    }

    public function supprimer_thematique($id){
        $Thematique = Thematique::find($id);
        $Thematique->etat = -1;
        $Thematique->save();
        return redirect('/thematiques');
    }

    public function ajouter_thematique(Request $request){
        $request->validate([
            'nom_thematique'=>'required',
        ]);
        $thematique = Thematique::create([
            'nom_thematiques' => $request->nom_thematique,
            'etat' => 0,
        ]);
        $thematique->save();
        return redirect('/thematiques');
    }
    public function Modifier_thematique($id){
        $thematique = Thematique::find($id);
        return view('thematique.modifier',['thematique'=>$thematique]);
    }
   public function save_modifier_thematique(Request $request){
    // $request->validate([
    //     'nom_thematique'=>'required',
    // ]);
    $Thematique = Thematique::find($request->id_thematiques);
    if(isset($request->nom_thematiques)){
        $Thematique->nom_thematiques =  $request->nom_thematiques;
//    ddd($request->nom_thematiques);
  
    }

    $Thematique->save();
    return redirect('/thematiques');

}}
