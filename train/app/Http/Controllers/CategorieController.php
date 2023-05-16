<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Voiture;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategorie;
use App\Models\Voyage;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.GestionCategorie.listCategorie',
        [ 'categories' => Categorie::all()
    ]);
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
    public function store(StoreCategorie $request)
    {
        $data = $request->only(['nomCat','prixCat']);
        $categorie = Categorie::create($data);
        return redirect()->back()->with('message', 'La catégorie à été ajouté avec succés');
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
        $categorie = Categorie::findOrFail($id);
        return view('admin.GestionCategorie.editCategorie', [
          'categorie' =>  $categorie
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategorie $request, $id)
    {
        
        $categorie = Categorie::findOrFail($id);
        $categorie->nomCat = $request->input('nomCat');
        $categorie->prixCat = $request->input('prixCat');
        $categorie->save();

        return redirect('listCategorie')->with('message', 'La categorie à été Modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id)->delete();
        if ($categorie){
          $data=[
          'status'=>'1',
          'msg'=>'success'
        ];
        return redirect()->back()->with('message', 'la categorie à été supprimé avec succés');
       }
    }
    public function search(Request $req){
        // $z = $req->input('voyageID');
        // $voyage = Voyage::where('id',$z);
        
        // $x = $req->input('categorie');
        // $data = Place::join('voitures', 'places.voiture_id', '=', 'voitures.id')
        //     ->where('voitures.category_id', $x)
        //     ->where('places.status','0')
        //     ->get(['places.id as idp', 'voitures.*']);
        //dd($place);
        
//    return view('Voyage/reservationClassChoisi', ['places' => $data]);

    }
}
