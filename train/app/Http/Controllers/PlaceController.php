<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlace;
use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Models\Place;
class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.GestionPlace.listPlace',
        [ 
            'places' => Place::all(),
            'voitures' => Voiture::all()
           
        ]
      );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.GestionPlace.listPlace');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlace $request)
    {
        
        $place = new Place;
        $place->voiture_id = $request->voiture_id;
        foreach (Voiture::all() as $v){
          if($v->id == $place->voiture_id ){ 
            $place->NumeroTrain= $v->train_id ;
          }
        }
        $place->save();
         return redirect()->back()->with('message', 'La place à été ajouté avec succés');
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
        $place = Place::findOrFail($id); 
        $voitures = Voiture::all();
        
        return view('admin.GestionPlace.editPlace', compact('place','voitures'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePlace $request, $id)
    {
         
        $place = Place::findOrFail($id);
        $place->voiture_id = $request->voiture_id;
        foreach (Voiture::all() as $v){
            if($v->id == $place->voiture_id ){ 
                $place->NumeroTrain= $v->train_id ;
        }
            }
        $place->save();
        if($place)
{
         return redirect('listPlace')->with('message', 'La place à été Modifié avec succés');
}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Place::find($id)->delete();
        if ($place){
          $data=[
          'status'=>'1',
          'msg'=>'success'
        ];
        return redirect()->back()->with('message', 'la place à été supprimé avec succés');
       }
    }
}
