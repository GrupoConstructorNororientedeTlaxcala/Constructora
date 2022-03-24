<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    //
    protected $table = 'presupuesto';
    protected $primaryKey = 'idpr';
    protected $fillable = ["fechaelaboracion", "material", "monto", "nombrecliente"];
}
