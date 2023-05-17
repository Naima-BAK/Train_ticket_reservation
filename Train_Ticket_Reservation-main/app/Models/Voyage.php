<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = ['heureDepartVoyage','heureFinVoyage','prixPropose','train_id','dateDepartVoyage','villeDep','villeFin'];


    public function train(){
        return $this->belongsTo('App\Train');
      }
    //relation Many to Many entre table ville et voyage:
    public function ville(){
       return $this->belongsToMany('App/Ville');
    }

    public function billet(){
        return $this->hasMany('App\Billet');
      }
}
