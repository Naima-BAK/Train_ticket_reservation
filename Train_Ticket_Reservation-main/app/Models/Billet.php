<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    use HasFactory;
     
    public function place(){
        return $this->belongsTo('App\Place');
      }
      public function user(){
        return $this->belongsTo('App\User');
      }

      public function voyage(){
        return $this->belongsTo('App\Voyage');
      }

}
