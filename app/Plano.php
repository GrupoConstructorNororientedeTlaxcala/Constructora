<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    //
    protected $table = 'plano';
    protected $primaryKey = 'idpl';
    protected $fillable = ["nombreplano", "nombreelaborador"];
}
