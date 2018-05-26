<div class="row">
     <div class="col s4 m4">
      <div class="card hoverable">
        <div class="card-content">
          <div class="row">
            <div class="col s6 m6">
          		<p><strong>Campus</strong></p>
							@foreach($campus as $ncampus)
               @if($ncampus->id == $sala->blocos_idCampus)
                            {{$ncampus->nomeCampus}}
                @endif
							@endforeach
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Bloco</strong></p>
              @foreach($blocos as $bloco)
               @if($bloco->id == $sala->blocos_idBlocos)
                            {{$bloco->nomeBlocos}}
                @endif
							@endforeach
          	</div>

            <div class="col s6 m6">
          		<p><strong>Nome sala</strong></p>
              {{$sala->nomeSalas}}
          	</div>

            <div class="col s6 m6">
          		<p><strong>Andar</strong></p>
              {{$sala->andar}}
          	</div>

            <div class="col s6 m6">
          		<p><strong>Capacidade da Turma</strong></p>
              {{$sala->capacidade}}
          	</div>

          </div>
        </div>

        <div class="card-action" align="right">
	        <a href="/sala/editar/{{$sala->id}}">  <i class="material-icons">edit</i></a>
	        <a href="/sala/excluir/{{$sala->id}}">  <i class="material-icons">delete</i></a>
        </div>
      </div>
    </div>
</div>
