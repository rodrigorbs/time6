<div class="row">
     <div class="col s3 m3">
      <div class="card hoverable">
        <div class="card-content">
          <div class="row">
          	<div class="col s6 m6">
          		<p><strong>Campus</strong></p>
							@foreach($campus as $ncampus)
               @if($ncampus->id == $bloco->campus_idCampus)
                            {{$ncampus->nomeCampus}}
                @endif
							@endforeach
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Bloco</strong></p>
          		{{$bloco->nomeBlocos}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>QTD Andares</strong></p>
          		{{$bloco->qtdAndares}}
          	</div>

          </div>
        </div>

        <div class="card-action" align="right">
	        <a href="/bloco/editar/{{$bloco->id}}">  <i class="material-icons">edit</i></a>
	        <a href="/bloco/excluir/{{$bloco->id}}">  <i class="material-icons">delete</i></a>
        </div>
      </div>
    </div>
</div>
