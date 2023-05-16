<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVille;
use Illuminate\Http\Request;

use App\Models\Ville;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.GestionVilles.listVille',
        [ 
            'villes' => Ville::all()
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
        return view('admin.GestionVilles.listVille');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVille $request)
    {
        

        $ville = new Ville;
        $ville->nomVille = $request->nomVille;
       
        $ville->save();
         return redirect()->back()->with('message', 'La ville à été ajouté avec succés');
   
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
        $ville = Ville::findOrFail($id); 
        return view('admin.GestionVilles.editVille', [
            'ville' =>  $ville
            ]);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVille $request, $id)
    {
         
        $ville = Ville::findOrFail($id);
        $ville->nomVille = $request->nomVille;
    
        $ville->save();
        if($ville)
{
         return redirect('listVille')->with('message', 'La ville à été Modifié avec succés');
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
        $ville = Ville::find($id)->delete();
        if ($ville){
          $data=[
          'status'=>'1',
          'msg'=>'success'
        ];
        return redirect('listVille')->with('message', 'La ville à été Modifié avec succés'); }
   
    }
}
