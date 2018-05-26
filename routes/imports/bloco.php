<?php

Route::get('/bloco', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@index'
        ]);

Route::get('/bloco/criar', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@formulario'
        ]);


Route::post('/bloco/criar', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@store'
        ]);

Route::get('/bloco/editar/{id}', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@edit'
        ]);

Route::put('/bloco/editar/{id}', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@update'
        ]);

Route::get('/bloco/excluir/{id}', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@del'
        ]);

Route::delete('/bloco/excluir/{id}', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@destroy'
        ]);
