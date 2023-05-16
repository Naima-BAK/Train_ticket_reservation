<?php

namespace App\Http\Controllers;

use App\Models\AvantPaiment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AvantPaimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        if(auth()->check()){
            $nom = Auth::user()->name ;
        
      
              $reservation = new AvantPaiment;
              $reservation->villeDepart = $request->villeD;
              $reservation->villeFin = $request->villeA; 
              $reservation->dateDepart = $request->dateV;
              $reservation->heureDepart = $request->hD;
              $reservation->heureFin = $request->hA; 
        
             $reservation->numeroTrain = $request->train;
             $reservation->prixPropose =$request->p ; 
             $reservation->nomUser=$nom;
             $reservation->infoPlaceVoiture = $request->infoPlaceVoiture;
             
             $reservation->save();
             //dd($reservation);
             $reservation = DB::table('avant_paiments')->latest('id','desc')->first();
            //dd($reservation);
             $place = $reservation->infoPlaceVoiture;
            $id_place = substr($place,8,1);
            //dd($id_place);
            //changer le statuts pas 1

           $a = DB::table('places')->where('id',$id_place)
                               ->update(['status' => '1']);
                      
            return view('Voyage.paiement',compact('reservation'));
       }else{
           
        return redirect('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
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
    
}
