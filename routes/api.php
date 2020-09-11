<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login',    'AuthController@authenticateProveedor');

// Proveedores
Route::group(['namespace' => 'Estudiantes'], function()
{
    Route::get('get_estudiantes' ,'EstudianteController@index');
    Route::post('buscar_estudiante' ,'EstudianteController@buscar');
    Route::post('create_estudiante','EstudianteController@store');
    Route::post('delete_estudiante', 'EstudianteController@destroy');
    Route::post('edit_estudiante','EstudianteController@edit');

   
});

Route::group(['middleware' => ['jwt.verify']], function () {

});


// });
