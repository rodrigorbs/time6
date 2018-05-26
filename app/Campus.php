<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    //
    protected $fillable = [
        'nomeCampus', 'logradouro', 'cidade','cep','uf','telefone'
    ];
}
