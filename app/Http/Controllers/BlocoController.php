<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloco;
use App\Campus;
use Session;
class BlocoController extends Controller
{
    public function index()
    {
      $blocos = Bloco::paginate(5);
      $campus = Campus::all(['id', 'nomeCampus']);
    	return view('pages.bloco.index', array('campus' => $campus, 'blocos' => $blocos));
    }


    public function edit($id, Campus $campus, Bloco $bloco)
    {
      $blocos = Bloco::find($id);
      $campus = Campus::all();
    	return view('pages.bloco.editar', array('campus' => $campus, 'blocos' => $blocos,));
    }

    public function update($id, Request $request)
    {

      $bloco = Bloco::find($id);
      $bloco->campus_idCampus = $request->input('selecao');
      $bloco->nomeBlocos = $request->input('nomeBlocos');
      $bloco->qtdAndares = $request->input('qtdAndares');
      if($bloco->save()){
       Session::flash('msg', '<script> alert("Bloco Atualizado!!!")</script>');
                          return redirect('bloco');
            }

    }


    public function formulario()
    {
      $blocos = Bloco::all();
      $campus = Campus::all();
    	return view('pages.bloco.criar', array('campus' => $campus, 'blocos' => $blocos));
    }

    public function store(Request $request, Bloco $bloco){
      $this->validate($request,[
            'nomeBlocos' => 'required|min:3',
            'qtdAndares' => 'required|numeric|max:10',
      ]);

      if($request->has('id')){
        $bloco = Bloco::find($request->id);
      }
        $bloco->campus_idCampus = $request->input('selecao');
        $bloco->nomeBlocos = $request->input('nomeBlocos');
        $bloco->qtdAndares = $request->input('qtdAndares');
        if($bloco->save()){
         Session::flash('mensagem', '<script> alert("Concluído!!! Bloco Cadastrado com sucesso!!!")</script>');
                            return redirect('bloco');
              }
        }

        public function del($id, Campus $campus, Bloco $bloco)
        {
          $blocos = Bloco::find($id);
          $campus = Campus::all();
        	return view('pages.bloco.excluir', array('campus' => $campus, 'blocos' => $blocos,));
        }


        public function destroy($id, Bloco $bloco)
        {
          $blocos = Bloco::find($id);
          $blocos->delete();
          Session::flash('delMsg', '<script> alert("Bloco Excluído!!!")</script>');
          return redirect('bloco');
        }



}
