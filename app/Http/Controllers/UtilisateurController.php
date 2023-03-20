<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    /*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('utilisateur.index', ['users' => $users]); 
    }
    // public function liste() {
    //     $users = User::all();
    //     // dd($users);
    //     return view('utilisateur.liste', ['users' => $users]);
    // }

    // public function showUsers()
    // {
    //     $users = User::all();

    //     return view('users.index', ['users' => $users]);
    // }

}
