<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{

    protected $fillable = [

          'origem','destino','orientacao'
    ];
}
