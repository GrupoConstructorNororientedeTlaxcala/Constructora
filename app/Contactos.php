<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    //
    protected $table = 'contacto';
    protected $primaryKey = 'idc';
    protected $fillable = ["nombre", "apaterno", "amaterno", "telefono", "mail", "direccion"];
}
