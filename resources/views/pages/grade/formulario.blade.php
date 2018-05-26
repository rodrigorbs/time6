@extends('template.base')

@section('titulo')
	Cadastro de Grade
@stop

@section('pagina')
	Formulario Grade
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

                  <label>Curso</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                  <label>Semestre</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                  <label>Semana</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                  <label>Turno</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                  <label>Campus</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                  <label>Bloco</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                  <label>Sala</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                </div>

              </div>
              <div class="card-action">
                <a class="green darken-2 waves-light btn">
                  <i>Gravar</i>
                </a>
                <a href="/grade" class="red lighten-2 waves-light btn"><i>Cancelar</i></a>

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
