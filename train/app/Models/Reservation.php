<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['heureDepartVoyage','categorie','heureFinVoyage','prixPropose','train_id','dateDepartVoyage','villeDep','villeFin','prixPropose'];

}
