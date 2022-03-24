<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipot extends Model
{
    //
    protected $table = 'equipotransporte';
    protected $primaryKey = 'idet';
    protected $fillable = ["detalleset", "fotoet", "marcaet", "modeloet", "numeroserie"];
}
