<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activite;
use Illuminate\Http\Request;
use App\Models\Thematique;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        // $users = User::all();
        $n = Activite::all();
        //$n = DB::select('select * from thematiques');
        return view('activitee.home', ['activites' => $n]); //['thematiques'=>$n]
    }



    public function ajouter()
    {                   //$id_user1
        $users = User::all();
        // $m::DB select('select * from users where code id_user=?',[$id_user1])
        $n = Thematique::all();
        // $n = Thematique::where('etat',1)->get();
        return view('activitee.ajouter', ['users' => $users, 'thematiques' => $n]); //['user'=>$m]    ['thematiques'=>$n]
    }

    public function saveajouter(Request $request)
    {
        $request->validate([
            'objet' => 'required',
            // 'thematique'=>'required',
            // 'description'=>'required',
            // 'commentaires'=>'required',
        ]);
        $user = Auth::user()->id_user;
        // dd($request->all());
        // dd($request->all());
        $imageName = $request->piece_joints->getClientOriginalName(); // <= pour telecharger on méme nome du entr...| deferant name->getClientOriginalExtension()
        $Activite = Activite::create([
            'id_thematiques' => $request->thematique,
            'objet' => $request->objet,
            'description' => $request->description,
            'date_debut' => Carbon::now(),
            'date_fin' => $request->date_fin,
            'status' => 0,
            'commentaire' => $request->commentaire,
            'id_user' => $user,
            'affichage' => 0,
            'piece_joints' => $imageName
        ]);
        $Activite->save();
        $request->piece_joints->move(public_path('/uploadedimages/' . $Activite->id_activites), $imageName);
        $url = asset('uploadedimages/' . $Activite->id_activites . '/' . $Activite->piece_joints);
        return redirect('/home');
    }

    public function modifier($id)
    {
        $users = User::all();
        // $m::DB select('select * from users where code id_user=?',[$id_user1])
        $n = Thematique::all();
        $Activite = Activite::find($id);
        // $n = Thematique::where('etat',1)->get();
        return view('activitee.modifier', ['users' => $users, 'thematiques' => $n, 'Activite' => $Activite]);
    }

    public function savemodifier(Request $request)
    {
        $request->validate([
            'objet' => 'required',
            'thematique' => 'required',
            'description' => 'required',
            'commentaires' => 'required',
        ]);
        $user = new User();
        $activite = Activite::find($request->id_activites);
        // dd($activite,$request->all());
        $activite->objet = $request->objet;
        $activite->description = $request->description;
        $activite->commentaire = $request->commentaire;
        $activite->save();
        return redirect('/home');
    }
    public function supprimer($id)
    {
        $activite = Activite::find($id);
        $activite->affichage = -1;
        $activite->save();
        return redirect('/home');
    }

    public function resolu($id)
    {
        $activite = Activite::find($id);
        $activite->status = 1;
        $activite->save();
        return redirect('/home');
    }

    public function annuler($id)
    {
        $activite = Activite::find($id);
        $activite->status = 2;
        $activite->date_fin = Carbon::now();
        $activite->save();
        return redirect('/home');
    }

    public function Corbeille()
    {
        $activites = Activite::all();
        return view('activitee.Corbeille', ['activites' => $activites]);
    }

    public function restaurer($id){ 
        $activite = Activite::find($id); 
        $activite->affichage = 0; 
        $activite->save(); 
        return redirect('/Corbeille'); 
    }


    public function consulter($id)
    {
        $activite = Activite::find($id);
        $user = User::find($activite->id_user);
        $thematique = Thematique::find($activite->id_thematiques);
        return view('activitee.consulter', ['activite' => $activite, 'thematique' => $thematique, 'user' => $user]);
    }
}
// ['users' => $users]
