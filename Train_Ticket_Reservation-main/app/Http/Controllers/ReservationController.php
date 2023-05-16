<?php

namespace App\Http\Controllers;


use App\Models\Place;
use App\Models\Voyage;

use App\Models\Voiture;
use App\Models\Categorie;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $x = $_POST['categorie'];
        $data = Categorie::where('nomCat',$req->categorie)->get();
                              
        return view ('Voyage/reservationChoisi',['voitures' => $data]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $x = $request->input('categorie');
         //--recupere le prix categorie !
         $cates = Categorie::where('id',$x)
         ->get('*');
         foreach($cates as $c){
              $prix = $c->prixCat;
         }
         //dd($prix);
        //------------Insert to table reservations-----------------------------
        $reservation = new Reservation;
        $reservation->villeDepart = $request->villeD;
        $reservation->villeFin = $request->villeA; 
        $reservation->dateDepart = $request->dateDepartVoyage;
        
        $reservation->heureDepart = $request->heureDepartVoyage;
        $reservation->heureFin = $request->heureFinVoyage; 
        
        $reservation->numeroTrain = $request->train;
        $reservation->prixPropose =(float) $request->prixPropose + $prix; 
        $reservation->categorie = $request->categorie; 
        $reservation->save();
        //---chercher la place et voiture correspond a la categorie-----------------------------
        $x = $request->input('categorie');
        $places = Place::join('voitures', 'places.voiture_id', '=', 'voitures.id')
            ->where('voitures.category_id', $x)
            ->where('places.status','0')
            ->get(['places.id as idp', 'voitures.*']);
           

        //--------------------------------------------------
        $reservation = DB::table('reservations')->latest('id','desc')->first();
    //  dd($reservation);
        return view('Voyage.reservationClassChoisi',compact('places' ,'reservation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $voyage = Voyage::findOrFail($id); 
            return view('Voyage.reservationChoisi',[
                'voyage' =>  $voyage
                ]);
                
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


 public function affiche($id)
    {
        // $reservation = Reservation::findOrFail($id); 
        // return view('Voyage.billet',[
        //     'reservation' =>  $reservation
        //     ]);
    }
}
