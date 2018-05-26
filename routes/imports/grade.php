<?php

Route::get('/grade', [
           'as'            => 'grade',
	       'middleware'    => 'auth',
           'uses'          => 'GradeController@index'
        ]);

Route::get('/grade/criar', [
           'as'            => 'grade',
	       'middleware'    => 'auth',
           'uses'          => 'GradeController@formulario'
        ]);

Route::post('/grade/criar', [
           'as'            => 'grade',
         'middleware'    => 'auth',
           'uses'          => 'GradeController@store'
        ]);
Route::get('/grade/editar/{id}', [
           'as'            => 'grade',
        'middleware'    => 'auth',
           'uses'          => 'GradeController@edit'
        ]);

Route::put('/grade/editar/{id}', [
           'as'            => 'grade',
        'middleware'    => 'auth',
           'uses'          => 'GradeController@update'
        ]);

Route::get('/grade/excluir/{id}', [
           'as'            => 'grade',
         'middleware'    => 'auth',
           'uses'          => 'GradeController@del'
       ]);

Route::delete('/grade/excluir/{id}', [
           'as'            => 'grade',
	       'middleware'    => 'auth',
           'uses'          => 'GradeController@destroy'
      ]);
