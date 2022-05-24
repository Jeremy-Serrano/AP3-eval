<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Evenement;
use App\Models\Entraineur;
use App\Models\Lieu;
use Illuminate\Support\Facades\Auth;
use App\Models;

class EvenementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Type = Type::all();
        return view('Evenement/gestionEvenement', ['Type'=>$Type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ID = Auth::user()->Id_Personnes;       
        $Type = Type::all();

        if($Entraineur=Entraineur::find($ID))
        {                  
        return view('Evenement.CreateEvenement', ['Type'=>$Type]);
        }
        else
        {
        return view('home');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lieu'=>'required',
            'date'=>'required',
        ]);

        $lieu = lieu::create([
            'AdresseLieu' => $request['lieu'] 
        ]);


        $e=Evenement::create([
            'DateEvent' => $request['date'],
            'Id_Type' => $request['Type'],
            'Id_Lieu' => $lieu->Id_Lieu,
            'Id_Personnes'=> Auth::user()->Id_Personnes
        ]);

        return view('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Type = Type::find($id);
        $event = $Type->Evenement;
        return view("Evenement\detailEvenement", ["Type" => $Type ,'Evenement' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Type::find($id);
        return view('Evenement.edit', compact('event', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Evenement::find($id);        
        $event  ->DateEvent = $request->input('DateEvent');          
        $event->save();        
        $event->types()->sync($request->input('types'));           
        return redirect('Evenement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Evenement::find($id);
        $event->delete();
        //$event->save();
        return redirect('Evenement');
    }
}
