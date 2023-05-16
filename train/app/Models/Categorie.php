<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['nomCat','prixCat'];
    
    public function voiture(){
        return $this->hasMany('App\Voiture');
      }

}
