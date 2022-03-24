<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    //
    protected $table = 'maquinaria';
    protected $primaryKey = 'id';
    protected $fillable = ["detallesm", "fotom", "marca", "modelo", "numserie"];
}
