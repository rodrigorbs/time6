<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloco extends Model
{
    //
    protected $fillable = [
        'nomeBlocos', 'qtdAndares', 'campus_idCampus',
    ];
}
