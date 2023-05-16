<?php

namespace App\Http\Controllers;


use App\Models\Train;
use App\Models\Voyage;
use Illuminate\Http\Request;

use App\Http\Requests\StoreVoyage;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.GestionVoyage.listVoyage',
        [ 
            'voyages' => Voyage::all(),
            'trains' => Train::all()
        ]
      );
    }



    
    function search(Request $req){
        
        if($req->input('villeD')== "" || $req->input('villeA')== "" || $req->input('dateV')== ""){
            return view('home');
        }else{
        $data = Voyage::where('villeDep','like','%'.$req->input('villeD').'%')
                                 ->where('villeFin', 'like','%'.$req->input('villeA').'%')
                                 ->where('dateDepartVoyage', 'like','%'.$req->input('dateV').'%')
                                 ->get();
                              
                               return view ('Voyage/resultatSearch',['voyages' => $data]);
 }}
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.GestionVoyage.listVoyage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $data = $request->only(['heureDepatVoyage','heureFinVoyage','dateDepartVoyage','prixPropose','train_id','villeDep','villeFin']);
        $voyage = Voyage::create($data);
      return redirect()->back()->with('message', 'Le voyage à été ajouté avec succés');
    
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
        
        $voyage = Voyage::findOrFail($id); 
        return view('admin.GestionVoyage.editVoyage',[
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
        $voyage = Voyage::findOrFail($id);

        $voyage->heureDepartVoyage = $request->heureDepartVoyage;
        $voyage->heureFinVoyage = $request->heureFinVoyage;
        $voyage->dateDepartVoyage = $request->dateDepartVoyage;
        $voyage->prixPropose = $request->prixPropose;
        $voyage->train_id = $request->train_id;
        $voyage->villeDep = $request->villeDep;
        $voyage->villeFin = $request->villeFin;
        $voyage->save();
        if($voyage)
{
         return redirect('listVoyage')->with('message', 'Le voyage à été Modifié avec succés');
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
        $voyage = Voyage::find($id)->delete();
        if ($voyage){
          $data=[
          'status'=>'1',
          'msg'=>'success'
        ];
        return redirect('listVoyage')->with('message', 'Le voyage à été Modifié avec succés'); }
   
    }
}
