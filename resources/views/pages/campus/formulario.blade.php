@extends('template.base')

@section('titulo')
	Cadastro de Campus
@stop

@section('pagina')
	Formulario campus
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

                  <div class="input-field col s8">
                    <input id="nomeCampus" type="text" class="validate">
                    <label for="last_name">Nome do Campus</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="logradouro" type="text" class="validate">
                    <label for="last_name">Logradoura</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="cidade" type="text" class="validate">
                    <label for="last_name">Cidade</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="cep" type="text" class="validate">
                    <label for="last_name">CEP</label>
                  </div>

                  <div class="input-field col s2">
                    <input id="uf" type="text" class="validate">
                    <label for="last_name">UF</label>
                  </div>


                  <div class="input-field col s6">
                    <input id="fone" type="text" class="validate">
                    <label for="last_name">Telefone</label>
                  </div>

                </div>

              </div>
              <div class="card-action">
                <a class="green darken-2 waves-light btn">
                  <i>Gravar</i>
                </a>
                <a href="/campus" class="red lighten-2 waves-light btn"><i>Cancelar</i></a>

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
