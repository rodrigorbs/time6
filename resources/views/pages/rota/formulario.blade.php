@extends('template.base')

@section('titulo')
	Cadastro de Rota
@stop

@section('pagina')
	Formulario Rota
@stop

@section('conteudo')

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="col s2 m2">

        </div>
           <div class="col s8 m8">
            <div class="card hoverable">
              <div class="card-content">
                <div class="row">

                  <label>Sala</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                  <div class="input-field col s8">
                    <input id="origem" type="text" class="validate">
                    <label for="last_name">Origem</label>
                  </div>

									<div class="input-field col s12">
          					<textarea id="orientacao" class="materialize-textarea"></textarea>
          					<label for="textarea1">Orientação</label>
        					</div>
                </div>

              </div>
              <div class="card-action">
                <a class="green darken-2 waves-light btn">
                  <i>Gravar</i>
                </a>
                <a href="/rota" class="red lighten-2 waves-light btn"><i>Cancelar</i></a>

              </div>
            </div>
          </div>
          <div class="col s2 m2">

          </div>
      </div>


      <!-- Teste -->

    </form>
  </div>

@stop()
