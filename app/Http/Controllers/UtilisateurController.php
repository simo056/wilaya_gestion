<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
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
        $users = User::all();
        return view('utilisateur.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('utilisateur.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_user' => 'required',
            'prenom_user' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
        ]);
        // dd($request->all());

        $user = User::create(
            [
                'id_role' => $request->role,
                'nom_user' => $request->nom_user,
                'prenom_user' => $request->prenom_user,
                'email' => $request->email,
                'password' => Hash::make('user@123'),
            ]
        );

        return redirect()->route('utilisateur.index')->with('success', 'L\'utilisateur a été ajouté avec succès.');
    }
    public function destroy($id)
    {
        
        $utilisateur = User::find($id);

        
        $utilisateur->etat = -1;
        $utilisateur->save();

        return redirect()->route('utilisateur.index')->with('success', 'Utilisateur supprimé avec succès.');
    }

    public function edite($id)
    {
        $utilisateur = User::find($id);

        return view('utilisateur.edite',['utilisateur' => $utilisateur]);


    }
}
