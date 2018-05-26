<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RotaController extends Controller
{
     public function index()
    {
    	return view('pages.rota.index');
    }

    public function formulario()
   {
     return view('pages.rota.formulario');
   }
  }
