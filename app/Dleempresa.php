<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dleempresa extends Model
{
    //
    protected $table = 'dlempresa';
    protected $primaryKey = 'ide';
    protected $fillable = ["nombred", "fecha", "descripcion", "escaneo"];
}
