<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Joueur;
use App\Models\Entraineur;

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



        
        $ID = Auth::user()->Id_Personnes;

        if($Joueur=Joueur::find($ID)){
            $Evenement = $Joueur->Evenement;
        return view('home_Joueur', ['Evenement'=>$Evenement]);
        }

        else if($Entraineur=Entraineur::find($ID)){
            return view('home_Entraineur');
        }

        else {
            return view('home');

        }
        
        
    }
}
