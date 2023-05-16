<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = ['voiture_id'];
    public function voiture(){
        return $this->belongsTo('App\Voiture');
      }

      public function billet(){
        return $this->hasMany('App\Billet');
      }
}

