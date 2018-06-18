<?php

Route::get('/', [
           'as'            => 'homepage',
           'uses'          => 'HomeController@index'
        ]);


Route::get('/Login', [
           'as'            => 'homepage',
           'middleware'    => 'auth',
          'uses'          => 'HomeController@login'
                ]);
