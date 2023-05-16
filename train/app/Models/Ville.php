<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    protected $fillable = ['nomVille'];
    //relation Many to Many entre table ville et voyage:
    public function voyages(){
        return $this->belongsToMany('App/Voyage');
     }
}
