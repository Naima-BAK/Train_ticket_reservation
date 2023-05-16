<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use App\Models\Train;
use App\Models\Categorie;
use Illuminate\Http\Request;

use App\Http\Requests\StoreVoiture;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.GestionVoiture.listVoiture',
        [ 
            'voitures' => Voiture::all(),
            'trains' => Train::all(),
            'categories' => Categorie::all()
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
        return view('admin.GestionVoiture.listVoiture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVoiture $request)
    {


        $voiture = new Voiture;
        $voiture->nombrePlaces = $request->nombrePlaces;
        $voiture->train_id = $request->train_id; 
        $voiture->category_id = $request->category_id;
        
        $voiture->save();
        // $data = $request->only(['nombrePlaces','train_id','category_id']);
        // $voiture = Voiture::create($data);
        return redirect()->back()->with('message', 'La voiture à été ajouté avec succés');
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
        $voiture = Voiture::findOrFail($id); 
        $trains = Train::all();
        $categories = Categorie::all();
        return view('admin.GestionVoiture.editVoiture', compact('voiture','trains','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVoiture $request, $id)
    {
        
        $voiture = Voiture::findOrFail($id);
        $voiture->nombrePlaces = $request->nombrePlaces;
       $voiture->train_id = $request->train_id; 
       $voiture->category_id = $request->category_id;
    
        $voiture->save();
        if($voiture)
{
         return redirect('listVoiture')->with('message', 'La voiture à été Modifié avec succés');
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
        $voiture = Voiture::find($id)->delete();
        if ($voiture){
          $data=[
          'status'=>'1',
          'msg'=>'success'
        ];
        return redirect('listVoiture')->with('message', 'La voiture à été Modifié avec succés'); }
    }
}
