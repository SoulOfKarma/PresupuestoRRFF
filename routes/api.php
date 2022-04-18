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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('/Login/Salir', 'UsersController@salir');
Route::post('/Login/GetUsers', 'UsersController@getUsuarios');
Route::post('/Login/getpr', 'UsersController@adminPr');
Route::post('/auth/login','UsersController@login');

//Post Sin JWT
Route::post('/PostAnio', 'AniosController@PostAnio');
Route::post('/PostItemPresupuestario', 'ItemPresupuestariosController@PostItemPresupuestario');
Route::post('/PostLicitacion', 'LicitacionesController@PostLicitacion');
Route::post('/PostProveedor', 'ProveedoresController@PostProveedor');

//Post como Put Sin JWT
Route::post('/PutAnio', 'AniosController@PutAnio');
Route::post('/PutItemPresupuestario', 'ItemPresupuestariosController@PutItemPresupuestario');
Route::post('/PutLicitacion', 'LicitacionesController@PutLicitacion');
Route::post('/PutProveedor', 'ProveedoresController@PutProveedor');

//Get Sin JWT
Route::get('/GetAnio', 'AniosController@GetAnio');
Route::get('/GetItemPresupuestario', 'ItemPresupuestariosController@GetItemPresupuestario');
Route::get('/GetLicitacion', 'LicitacionesController@GetLicitacion');
Route::get('/GetProveedor', 'ProveedoresController@GetProveedor');
Route::get('/GetTipoServicio', 'TipoServiciosController@GetTipoServicio');
Route::get('/GetUnidades', 'UnidadesController@GetUnidades');

Route::group(['middleware' => ['jwt.verify']], function() {
    //Route::get('/Bodega/GetUbicaciones', ['middleware' => 'cors', 'uses' => 'MaterialUbicacionesController@getAll']);
    //Route::post('/PostAnio', ['middleware' => 'cors', 'uses' => 'AniosController@PostAnio']);
});
