<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;
use App\Http\Requests\StoreTrain;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.GestionTrain.listTrain',
        [ 'trains' => Train::all()
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
    public function store(StoreTrain $request)
    {
        $data = $request->only(['typeTrain','DateMiseService','heureMiseService','nombreVoitures']);
        $train = Train::create($data);
      
        // $request->session()->flash('status','train is created !!');
        // return back();

        return redirect()->back()->with('message', 'Le train à été ajouté avec succés');
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
        $train = Train::findOrFail($id);
        return view('admin.GestionTrain.editTrain', [
           'train' =>  $train
           ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTrain $request, $id)
    {
        $train = Train::findOrFail($id);
        $train->typeTrain = $request->input('typeTrain');
        $train->DateMiseService = $request->input('DateMiseService');
        $train->heureMiseService = $request->input('heureMiseService');
        $train->nombreVoitures = $request->input('nombreVoitures');
        $train->save();
        // $request->session()->flash('status','train was updated !!');
        // return back();

        return redirect()->back()->with('message', 'Le train à été Modifié avec succés');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $train = Train::find($id)->delete();
        if ($train){
          $data=[
          'status'=>'1',
          'msg'=>'success'
        ];
        return redirect()->back()->with('message', 'Le train à été supprimé avec succés');
       }

    }
}
