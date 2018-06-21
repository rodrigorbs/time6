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

class RotaController extends Controller
{
     public function index()
    {
      $blocos = Bloco::all(['id', 'nomeBlocos']);
      $campus = Campus::all(['id', 'nomeCampus']);
      $rotas = Rota::paginate(5);

    	return view('pages.rota.index',array('blocos' => $blocos, 'campus' => $campus, 'rotas' => $rotas,));
    }


    public function formulario()
    {
      $campus = Campus::all();

		return view('pages.rota.formulario', array('campus' => $campus));
    }

    public function formularioRota(Request $request)
    {
      $rotas = Rota::all();
      $campus = Campus::find($request->input('selecaoCampus'));
      $salas = Sala::where('blocos_idCampus', 'LIKE',$request->input($campus->id))
        ->orderBy('nomeSalas')
            ->get();

		return view('pages.rota.criar', array('campus' => $campus, 'salas' => $salas, 'rotas' => $rotas));
    }


    public function store($id, Request $request, Rota $rotas, Sala $salas){
      $this->validate($request,[
            'orientacao' => 'required|min:10|string',
      ]);


      if($request->has('id')){
        $rotas = Rota::find($request->id);
      }

        $salas = Sala::find($request->input('selecaoSalasOrigem'));
        $nsalas = Sala::find($request->input('selecaoSalasDestino'));
        $rotas->origem = $salas->nomeSalas;
        $rotas->destino = $nsalas->nomeSalas;
        $rotas->orientacao = $request->input('orientacao');
        $rotas->rota_idCampus_destino = $id;
        $rotas->rota_IdBlocos_destino = $nsalas->blocos_idBlocos;
        $rotas->rota_idSala_origem = $request->input('selecaoSalasOrigem');
        $rotas->rota_idSala_destino = $request->input('selecaoSalasDestino');
        if($rotas->save()){
         Session::flash('mensagem', '<script> alert("Concluído!!! Rota Cadastrada com sucesso!!!")</script>');
                            return redirect('rota');
              }
        }

        public function edit($id, Rota $rotas)
                  {
                $salas = Sala::all();
                $blocos = Bloco::all();
                $campus = Campus::all();
                $rotas = Rota::find($id);
              	return view('pages.rota.editar', array('rota' => $rotas,'salas' => $salas, 'blocos' => $blocos, 'campus' => $campus));
                    }

        public function update($id, Request $request)
                  {

                $rotas = Rota::find($id);
                $rotas->orientacao = $request->input('orientacao');

                  if($rotas->save()){
                           Session::flash('msg', '<script> alert("Rota Atualizada!!!")</script>');
                            return redirect('rota');
                                          }

                                  }

        public function del($id, Rota $rotas)
                {
                $salas = Sala::all();
                $blocos = Bloco::all();
                $campus = Campus::all();
                $rotas = Rota::find($id);
              	return view('pages.rota.excluir', array('rota' => $rotas, 'blocos' => $blocos, 'campus' => $campus, 'salas' => $salas));
                  }


        public function destroy($id, Rota $rotas)
                {
                $rotas = Rota::find($id);
                $rotas->delete();
                    Session::flash('delMsg', '<script> alert("Rota Excluída!!!")</script>');
                  return redirect('rota');
                }



        }
