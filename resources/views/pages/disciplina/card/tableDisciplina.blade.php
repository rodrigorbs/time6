<div class="row">
     <div class="col s4 m4">
      <div class="card hoverable">
        <div class="card-content">
          <div class="row">
          	<div class="col s6 m6">
          		<p><strong>Disciplina</strong></p>
                  {{$disciplina->nomeDisciplina}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Carga Horária</strong></p>
          		{{$disciplina->cargaHoraria}} Horas
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Dia da aula</strong></p>
          		{{$disciplina->dataDia}}
          	</div>

            <div class="col s6 m6">
          		<p><strong>Curso</strong></p>
              @foreach($grades as $grade)
               @if($grade->id == $disciplina->disciplina_idGrade)
                            {{$grade->nomeCurso}}
                @endif
              @endforeach
          	</div>

            <div class="col s6 m6">

              @forelse($campus as $ncampus)
              @if($ncampus->id == $grade->grade_idCampus)
          		  <p><strong>Campus</strong></p>
                            {{$ncampus->nomeCampus}}
                @endif
                @empty

              @endforelse
          	</div>

          	<div class="col s6 m6">
              @forelse($blocos as $bloco)
               @if($bloco->id == $disciplina->disciplina_salaIdBlocos)
          		<p><strong>Bloco</strong></p>
                            {{$bloco->nomeBlocos}}
                @endif
                @empty

              @endforelse
          	</div>

          	<div class="col s6 m6">
              @forelse ($salas as $sala)
                   @if($disciplina->disciplina_idSala == $sala->id)

          		<p><strong>Sala</strong></p>
                        {{$sala->nomeSalas}}
                    @endif
                    @empty

              @endforelse

          	</div>

          </div>

        </div>
        <div class="card-action" align="right">
	        <a href="/disciplina/editar/{{$disciplina->id}}">  <i class="material-icons">edit</i></a>
	        <a href="/disciplina/excluir/{{$disciplina->id}}">  <i class="material-icons">delete</i></a>
          <a href="/disciplina/incluir/{{$disciplina->id}}">  <i class="material-icons">add</i></a>

        </div>
      </div>
    </div>
</div>
