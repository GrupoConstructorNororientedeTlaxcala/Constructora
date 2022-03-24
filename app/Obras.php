<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obras extends Model
{
    //
    protected $table = 'obracivil';
    protected $primaryKey = 'ido';
    protected $fillable = ["datoscliente", "descripciono", "estatus", "fechainicio", "fechafin", "montototal", "numcontrato"];
}
