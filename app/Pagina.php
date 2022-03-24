<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    //
    protected $table = 'pagina';
    protected $primaryKey = 'idp';
    protected $fillable = ["titulo", "descripcionp"];
}
