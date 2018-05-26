<?php

Route::get('/sala', [
           'as'            => 'sala',
	       'middleware'    => 'auth',
           'uses'          => 'SalaController@index'
        ]);

Route::get('/sala/criar', [
           'as'            => 'sala',
	       'middleware'    => 'auth',
           'uses'          => 'SalaController@formulario'
        ]);

Route::get('/sala/cadastro', [
           'as'            => 'sala',
	       'middleware'    => 'auth',
           'uses'          => 'SalaController@formularioSala'
        ]);

Route::post('/sala/cadastro/campus={id}', [
           'as'            => 'sala',
       'middleware'    => 'auth',
           'uses'          => 'SalaController@store'
        ]);

Route::get('/sala/editar/{id}', [
           'as'            => 'sala',
        'middleware'    => 'auth',
           'uses'          => 'SalaController@edit'
        ]);

Route::put('/sala/editar/{id}', [
           'as'            => 'sala',
        'middleware'    => 'auth',
           'uses'          => 'SalaController@update'
        ]);

Route::get('/sala/excluir/{id}', [
           'as'            => 'sala',
         'middleware'    => 'auth',
           'uses'          => 'SalaController@del'
       ]);

Route::delete('/sala/excluir/{id}', [
           'as'            => 'sala',
	       'middleware'    => 'auth',
           'uses'          => 'SalaController@destroy'
      ]);
