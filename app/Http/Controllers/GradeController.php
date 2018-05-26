<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloco;
use App\Campus;
use App\Sala;
use App\Grade;
use Session;
class GradeController extends Controller
{
public function index()
  {
  $grades = Grade::paginate(5);
  $campus = Campus::all(['id', 'nomeCampus']);
    	return view('pages.grade.index', array('campus' => $campus, 'grades' => $grades));
  }

    public function formulario()
   {

       $campus = Campus::all(['id', 'nomeCampus']);
         	return view('pages.grade.criar', array('campus' => $campus));
   }

public function store(Request $request, Grade $grade){

     $this->validate($request,[
           'nomeCurso' => 'required|min:3|max:50',
           'SemestresCurso' => 'required|numeric|max:12',
           'turno' => 'required|min:3|max:20',
     ]);

     if($request->has('id')){
       $grade = Grade::find($request->id);
     }

       $grade->grade_idCampus = $request->input('selecao');
       $grade->nomeCurso = $request->input('nomeCurso');
       $grade->SemestresCurso = $request->input('SemestresCurso');
       $grade->turno = $request->input('turno');
       if($grade->save()){
        Session::flash('mensagem', '<script> alert("Concluído!!! Grade Cadastrada com sucesso!!!")</script>');
                           return redirect('grade');
             }
       }

       public function edit($id, Grade $grades, Campus $campus)
                 {

               $campus = Campus::all();
               $grades = Grade::find($id);
              	return view('pages.grade.editar', array('grades' => $grades, 'campus' => $campus));
                   }

       public function update($id, Request $request)
                 {

               $grades = Grade::find($id);
               $grades->grade_idCampus = $request->input('selecao');
               $grades->nomeCurso = $request->input('nomeCurso');
               $grades->SemestresCurso = $request->input('SemestresCurso');
               $grades->turno = $request->input('turno');
                 if($grades->save()){
                          Session::flash('msg', '<script> alert("Grade Atualizada!!!")</script>');
                           return redirect('grade');
                                         }

                                 }

           public function del($id, Campus $campus, Grade $grades)
           {
               $grades = Grade::find($id);
               $campus = Campus::all();
             	return view('pages.grade.excluir', array('campus' => $campus, 'grades' => $grades,));
           }


           public function destroy($id, Grade $grades)
           {
              $grades = Grade::find($id);
              $grades->delete();
                           Session::flash('delMsg', '<script> alert("Grade Excluída!!!")</script>');
                 return redirect('grade');
               }

}
