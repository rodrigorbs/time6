<div class="row">
     <div class="col s4 m4">
      <div class="card hoverable">
        <div class="card-content">
          <div class="row">
            <div class="col s6 m6">
          		<p><strong>Campus</strong></p>
							@foreach($campus as $ncampus)
               @if($ncampus->id == $grade->grade_idCampus)
                            {{$ncampus->nomeCampus}}
                @endif
							@endforeach
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Curso</strong></p>
          		{{$grade->nomeCurso}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Quantidade de Semestre</strong></p>
          		{{$grade->SemestresCurso}}
          	</div>

            <div class="col s6 m6">
          		<p><strong>Turno</strong></p>
          		{{$grade->turno}}
          	</div>

          </div>

        </div>
        <div class="card-action">
	        <a href="/grade/editar/{{$grade->id}}">  <i class="material-icons">edit</i></a>
	        <a href="/grade/excluir/{{$grade->id}}">  <i class="material-icons">delete</i></a>
        </div>
      </div>
    </div>
</div>
