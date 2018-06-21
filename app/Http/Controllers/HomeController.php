<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloco;
use App\Campus;
use App\Sala;
use App\Disciplina;
use App\Grade;
use App\Rota;
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

      $campus = Campus::all();
        return view('pages.home.homepage',array('campus' => $campus));
    }

    public function formularioHome(Request $request)
    {
      $rotas = Rota::all();
      $campus = Campus::find($request->input('selecaoCampus'));
      $salas = Sala::where('blocos_idCampus', 'LIKE',$request->input($campus->id))
        ->orderBy('nomeSalas')
            ->get();
      $nsalas = Sala::where('blocos_idCampus', 'LIKE',$request->input($campus->id))
              ->orderBy('nomeSalas')
                  ->get();


		return view('pages.home.consulta', array('campus' => $campus, 'salas' => $salas, 'nsalas' => $nsalas, 'rotas' => $rotas));
    }

    public function find($id,Request $request, Rota $rotas, Sala $salas, Campus $campus)
    {
      $campus = Campus::find($id);
      $salas = Sala::find($request->input('selecaoSalasOrigem'));
      $nsalas = Sala::find($request->input('selecaoSalasDestino'));
      $rotas = Rota::all();

		return view('pages.home.resultado', array('rotas' => $rotas, 'salas' => $salas, 'nsalas' => $nsalas, 'campus' => $campus));

    }


    public function login()
    {
		return view('pages.dashboard.index');
    }
}
