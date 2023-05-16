<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $fillable = ['typeTrain','DateMiseService','heureMiseService','nombreVoitures'];




    public function voiture(){
      return $this->hasMany('App\Voiture');
    }

    public function locomotive(){
      return $this->hasMany('App\Locomotive');
    }

    public function voyage(){
      return $this->hasMany('App\Voyage');
    }
}
