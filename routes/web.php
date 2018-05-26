<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',['as' =>'root','uses'=>function (){

    if (Auth::check()){
        return redirect()->route('dashboard');
    }
    else{
        return view('auth.login');
    }

}]);


Auth::routes();

require_once base_path('routes/imports/imageUpload.php');
require_once base_path('routes/imports/dashboard.php');
require_once base_path('routes/imports/campus.php');
require_once base_path('routes/imports/bloco.php');
require_once base_path('routes/imports/sala.php');
require_once base_path('routes/imports/rota.php');
require_once base_path('routes/imports/grade.php');
require_once base_path('routes/imports/disciplina.php');
