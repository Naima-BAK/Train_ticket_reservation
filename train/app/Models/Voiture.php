<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = ['nombrePlaces','train_id','category_id'];

    public function train(){
        return $this->belongsTo('App\Train');
      }

    
      public function place(){
        return $this->hasMany('App\Place');
      }

      public function category(){
        return $this->belongsTo('App\Category');
      }
}
