<?php

/*Route de imagem*/
Route::get('perfil', 'ImageUploadController@perfil');

Route::post('perfil', 'ImageUploadController@updateAvatar');

Route::get('/userimage', [
    'uses' => 'ImageUploadController@getUserImage',
    'as'   => 'perfil.image'
]);
