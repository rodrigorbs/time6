<?php

Route::get('/campus', [
           'as'            => 'campus',
	       'middleware'    => 'auth',
           'uses'          => 'CampusController@index'
        ]);

Route::get('/campus/criar', [
           'as'            => 'campus',
	       'middleware'    => 'auth',
           'uses'          => 'CampusController@formulario'
        ]);


Route::post('/campus/criar', [
           'as'            => 'campus',
	       'middleware'    => 'auth',
           'uses'          => 'CampusController@store'
        ]);
Route::get('/campus/editar/{id}', [
           'as'            => 'campus',
        'middleware'    => 'auth',
           'uses'          => 'CampusController@edit'
      ]);

Route::put('/campus/editar/{id}', [
           'as'            => 'campus',
       'middleware'    => 'auth',
           'uses'          => 'CampusController@update'
      ]);
Route::get('/campus/excluir/{id}', [
           'as'            => 'campus',
       'middleware'    => 'auth',
           'uses'          => 'CampusController@del'
      ]);

Route::delete('/campus/excluir/{id}', [
           'as'            => 'campus',
	       'middleware'    => 'auth',
           'uses'          => 'CampusController@destroy'
      ]);
