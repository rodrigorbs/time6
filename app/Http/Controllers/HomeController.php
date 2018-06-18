<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloco;
use App\Campus;
use App\Sala;
use App\Disciplina;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $blocos = Bloco::all(['id', 'nomeBlocos']);
      $campus = Campus::all(['id', 'nomeCampus']);
      $disciplina = Disciplina::all([]);
      $grade = Grade::all([]);
      $rota = Rota::all([]);
      $sala = Sala::all([]);
        return view('pages.home.homepage');
    }


    public function login()
    {
		return view('pages.dashboard.index');
    }
}
