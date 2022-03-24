<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quienessomos extends Model
{
    //
    protected $table = 'qs';
    protected $primaryKey = 'idqs';
    protected $fillable = ["tituloqs", "descripcionqs"];
}
