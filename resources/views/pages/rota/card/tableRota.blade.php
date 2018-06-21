<div class="row">
     <div class="col s4 m4">
      <div class="card hoverable">
        <div class="card-content">
          <div class="row">
            <div class="col s6 m6">
          		<p><strong>Campus</strong></p>
							@foreach($campus as $ncampus)
               @if($ncampus->id == $rota->rota_idCampus_destino)
                            {{$ncampus->nomeCampus}}
                @endif
							@endforeach
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Bloco</strong></p>
              @foreach($blocos as $bloco)
               @if($bloco->id == $rota->rota_IdBlocos_destino)
                            {{$bloco->nomeBlocos}}
                @endif
							@endforeach
          	</div>

            <div class="col s6 m6">
          		<p><strong>Origem</strong></p>
              {{$rota->origem}}
          	</div>

            <div class="col s6 m6">
          		<p><strong>Destino</strong></p>
              {{$rota->destino}}
          	</div>

            <div class="col s6 m6">
          		<p><strong>Orientação</strong></p>
              {{$rota->orientacao}}
          	</div>

          </div>
        </div>

        <div class="card-action" align="right">
	        <a href="/rota/editar/{{$rota->id}}">  <i class="material-icons">edit</i></a>
	        <a href="/rota/excluir/{{$rota->id}}">  <i class="material-icons">delete</i></a>
        </div>
      </div>
    </div>
</div>
