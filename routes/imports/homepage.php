<?php

Route::get('/', [
           'as'            => 'homepage',
           'uses'          => 'HomeController@index'
        ]);

Route::get('/consulta', [
           'as'            => 'homepage',
           'uses'          => 'HomeController@formularioHome'
        ]);

Route::post('/consulta/campus={id}', [
           'as'            => 'homepage',
           'uses'          => 'HomeController@find'
        ]);


Route::get('/Login', [
           'as'            => 'homepage',
           'middleware'    => 'auth',
          'uses'          => 'HomeController@login'
                ]);
