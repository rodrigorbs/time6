<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Campus;
class CampusController extends Controller
{
  public function index()
    {
    $campus = Campus::paginate(5);
		return view('pages.campus.index', array('campus' => $campus));
    }

    public function formulario()
      {
  		return view('pages.campus.criar');
      }

     public function store(Request $request, Campus $campus){
            $this->validate($request,[
                 'nomeCampus' => 'required|min:3|max:50',
                 'logradouro' => 'required|min:10|max:100',
                 'cidade' => 'required|min:3|max:50' ,
                 'cep'=>'required|regex:/[0-9]{2}.[0-9]{3}-[0-9]{3}/',
                 'uf' => 'required|max:2|regex:/[A-Z]{2}/' ,
                 'telefone' => 'required|numeric|min:9',

            ]);

            if($request->has('id')){
              $campus = Campus::find($request->id);
            }
              $campus->nomeCampus = $request->input('nomeCampus');
              $campus->logradouro = $request->input('logradouro');
              $campus->cidade = $request->input('cidade');
              $campus->cep = $request->input('cep');
              $campus->uf = $request->input('uf');
              $campus->telefone = $request->input('telefone');

              if($campus->save()){
               Session::flash('mensagem', '<script> alert("Concluído!!! Campus Cadastrado com sucesso!!!")</script>');
                                  return redirect('campus');
                    }
              }


          public function edit($id, Campus $campus)
          {
            $campus = Campus::find($id);
          	return view('pages.campus.editar', array('campus' => $campus));
            }

          public function update($id, Request $request)
                  {

                    $campus = Campus::find($id);
                    $campus->nomeCampus = $request->input('nomeCampus');
                    $campus->logradouro = $request->input('logradouro');
                    $campus->cidade = $request->input('cidade');
                    $campus->cep = $request->input('cep');
                    $campus->uf = $request->input('uf');
                    $campus->telefone = $request->input('telefone');
                    if($campus->save()){
                     Session::flash('msg', '<script> alert("Campus Atualizado!!!")</script>');
                                        return redirect('campus');
                          }

                  }

                  public function del($id, Campus $campus)
                  {
                    $campus = Campus::find($id);
                  	return view('pages.campus.excluir', array('campus' => $campus));
                  }


                  public function destroy($id, Campus $campus)
                  {
                    $campus = Campus::find($id);
                    $campus->delete();
                    Session::flash('delMsg', '<script> alert("Bloco Excluído!!!")</script>');
                    return redirect('campus');
                  }




}
