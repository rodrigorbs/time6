<?php

Route::get('/dashboard', [
           'as'            => 'dashboard',
	       'middleware'    => 'auth',
           'uses'          => 'DashboardController@index'
        ]);
