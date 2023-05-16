<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvantPaiment extends Model
{
    use HasFactory;
    protected $fillable = ['heureDepart','heureFin','prixPropose','numeroTrain','dateDepart','villeDepart','villeFin','infoPlaceVoiture','infoPlaceVoiture'];

}
