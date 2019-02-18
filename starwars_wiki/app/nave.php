<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nave extends Model
{
    protected $fillable = [
     'id','nombre','modelo','clase','manofactura','costo_c','tripulacion','pasajeros','velocidad_maxima','ranking_h','mglt','capacidad_carga','consumibles'
   ];
}
