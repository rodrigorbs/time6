<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Bloco;
use App\Grade;
use App\Campus;
use App\Sala;
use App\Disciplina;

class DisciplinaController extends Controller
{
  public function index(Grade $grades, Campus $campus, Bloco $blocos, Sala $salas, Disciplina $disciplinas)
    {
    $disciplinas = Disciplina::paginate(5);
    $grades = Grade::all();
    $campus = Campus::all();
    $blocos = Bloco::all();
    $salas = Sala::all();

		return view('pages.disciplina.index', array('disciplinas' => $disciplinas,
     'grades' => $grades,'campus' => $campus,'blocos' => $blocos,'salas' => $salas));
    }

    public function formulario()
    {
      $disciplinas = Disciplina::all();
      $grades = Grade::all(['id','nomeCurso']);

		return view('pages.disciplina.criar', array('disciplinas' => $disciplinas, 'grades' => $grades));
    }

    public function store(Request $request, Disciplina $disciplina)
    {

      $this->validate($request,[
            'nomeDisciplina' => 'required|min:3|max:150',
            'cargaHoraria' => 'required|numeric|max:1000',
            'dataDia' => 'required|in:"segunda-feira","terça-feira","quarta-feira","quinta-feira","sexta-feira","sábado","domingo"|min:3|max:15',
      ]);

      if($request->has('id')){
        $disciplina = Disciplina::find($request->id);
      }

        $disciplina->disciplina_idGrade = $request->input('selecaoGrades');
        $disciplina->nomeDisciplina = $request->input('nomeDisciplina');
        $disciplina->cargaHoraria = $request->input('cargaHoraria');
        $disciplina->dataDia = $request->input('dataDia');
        if($disciplina->save()){
         Session::flash('mensagem', '<script> alert("Concluído!!! Disciplina Cadastrada com sucesso!!!")</script>');
         return redirect('disciplina');

          }

        }

        public function formularioBloco($id,Request $request, Grade $grades, Bloco $blocos, Campus $campus, Disciplina $disciplinas)
        {

          $disciplinas = Disciplina::find($id);
          $grades = Grade::all();
          $campus = Campus::all();
          $blocos = Bloco::all();

    		return view('pages.disciplina.formulario', array('disciplinas' => $disciplinas,'grades' => $grades,'blocos' => $blocos,'campus' => $campus));
        }


        public function formularioInclusao($id,Request $request, Grade $grades, Campus $campus,
        Bloco $blocos, Sala $salas, Disciplina $disciplinas)
        {

          $disciplinas = Disciplina::find($id);
          $disciplinas->disciplina_salaIdBlocos = $request->input('selecaoBlocos');
          $grades = Grade::all();
          $campus = Campus::all();
          $blocos = Bloco::find($disciplinas->disciplina_salaIdBlocos);
          $salas = Sala::all();
            if($disciplinas->save()){
    		return view('pages.disciplina.inclusao', array('disciplinas' => $disciplinas,
         'grades' => $grades,'campus' => $campus,'blocos' => $blocos,'salas' => $salas));

            }
        }


        public function includeUpdate($id, Request $request, Disciplina $disciplinas){

            $disciplinas = Disciplina::find($id);
            $disciplinas->disciplina_idSala = $request->input('selecaoSalas');
            if($disciplinas->save()){
             Session::flash('mensagem', '<script> alert("Concluído!!! Sala Incluída a Grade escolhida com sucesso!!!")</script>');
                                return redirect('disciplina');
                  }
            }


            public function edit($id, Grade $grades, Disciplina $disciplinas)
                      {

                    $grades = Grade::all();
                    $disciplinas = Disciplina::find($id);
                   	return view('pages.disciplina.editar', array('grades' => $grades, 'disciplinas' => $disciplinas));
                        }

            public function update($id, Request $request, Grade $grades, Bloco $blocos, Campus $campus, Disciplina $disciplinas)
                                  {
                    $disciplinas = Disciplina::find($id);
                    $disciplinas->disciplina_idGrade = $request->input('selecaoGrades');
                    $disciplinas->nomeDisciplina = $request->input('nomeDisciplina');
                    $disciplinas->cargaHoraria = $request->input('cargaHoraria');
                    $disciplinas->dataDia = $request->input('dataDia');
                    $grades = Grade::all();
                    $campus = Campus::all();
                    $blocos = Bloco::all();

                          if($disciplinas->save()){
                                       Session::flash('msg', '<script> alert("Disciplina Atualizada!!!")</script>');
           return view('pages.disciplina.formulario', array('disciplinas' => $disciplinas,'grades' => $grades,'blocos' => $blocos,'campus' => $campus));
                                                                           }

                                      }

          public function del($id, Disciplina $disciplinas, Grade $grades, Bloco $blocos, Campus $campus, Sala $salas)
            {
                    $disciplinas = Disciplina::find($id);
                    $grades = Grade::all();
                    $campus = Campus::all();
                    $salas = Sala::all();
                    $blocos = Bloco::all();

            	return view('pages.disciplina.excluir', array('disciplinas' => $disciplinas, 'grades' => $grades,
              'salas' => $salas, 'blocos' => $blocos,'campus' => $campus));
            }


          public function destroy($id, Grade $grades)
            {
                   $disciplinas = Disciplina::find($id);
                   $disciplinas->delete();
            Session::flash('delMsg', '<script> alert("Disciplina Excluída!!!")</script>');
                        return redirect('disciplina');
            }





}
