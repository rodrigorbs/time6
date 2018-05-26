<?php

Route::get('/rota', [
           'as'            => 'rota',
	       'middleware'    => 'auth',
           'uses'          => 'RotaController@index'
        ]);

Route::get('/rota/formulario', [
           'as'            => 'rota',
	       'middleware'    => 'auth',
           'uses'          => 'RotaController@formulario'
        ]);
