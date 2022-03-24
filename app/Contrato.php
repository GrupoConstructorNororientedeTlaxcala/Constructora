<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //
    protected $table = 'contrato';
    protected $primaryKey = 'idct';
    protected $fillable = ["numcontrato", "fechact", "descripcionct", "montoct", "fotoct"];
}
