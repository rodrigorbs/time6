<?php

Route::get('/disciplina', [
           'as'            => 'disciplina',
	       'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@index'
        ]);

Route::get('/disciplina/criar', [
           'as'            => 'disciplina',
	       'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@formulario'
        ]);


Route::post('/disciplina/criar', [
           'as'            => 'disciplina',
	       'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@store'
        ]);

Route::get('/disciplina/incluir/{id}', [
           'as'            => 'disciplina',
	       'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@formularioBloco'
        ]);
Route::put('/disciplina/incluir/{id}', [
           'as'            => 'disciplina',
	       'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@formularioInclusao'
        ]);

Route::put('/disciplina/inclusao/{id}', [
           'as'            => 'disciplina',
	       'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@includeUpdate'
          ]);






Route::get('/disciplina/editar/{id}', [
           'as'            => 'disciplina',
        'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@edit'
      ]);

Route::put('/disciplina/editar/{id}', [
           'as'            => 'disciplina',
       'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@update'
      ]);
Route::get('/disciplina/excluir/{id}', [
           'as'            => 'disciplina',
       'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@del'
      ]);

Route::delete('/disciplina/excluir/{id}', [
           'as'            => 'disciplina',
	       'middleware'    => 'auth',
           'uses'          => 'DisciplinaController@destroy'
      ]);
