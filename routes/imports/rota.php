<?php

Route::get('/rota', [
           'as'            => 'rota',
	       'middleware'    => 'auth',
           'uses'          => 'RotaController@index'
        ]);


Route::get('/rota/criar', [
                   'as'            => 'rota',
        	       'middleware'    => 'auth',
                   'uses'          => 'RotaController@formulario'
                ]);

Route::get('/rota/cadastro', [
                   'as'            => 'rota',
        	       'middleware'    => 'auth',
                   'uses'          => 'RotaController@formularioRota'
                ]);

Route::post('/rota/cadastro/campus={id}', [
                   'as'            => 'rota',
               'middleware'    => 'auth',
                   'uses'          => 'RotaController@store'
                ]);

Route::get('/rota/editar/{id}', [
                           'as'            => 'rota',
                        'middleware'    => 'auth',
                           'uses'          => 'RotaController@edit'
                        ]);

Route::put('/rota/editar/{id}', [
                           'as'            => 'rota',
                        'middleware'    => 'auth',
                           'uses'          => 'RotaController@update'
                        ]);

Route::get('/rota/excluir/{id}', [
                           'as'            => 'rota',
                         'middleware'    => 'auth',
                           'uses'          => 'RotaController@del'
                       ]);

Route::delete('/rota/excluir/{id}', [
                           'as'            => 'rota',
                	       'middleware'    => 'auth',
                           'uses'          => 'RotaController@destroy'
                      ]);
