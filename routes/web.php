<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DomicilioController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
route::get('/', HomeController::class); // igual a la anterior con invoke
/* Route::get('/doctores', function () {
    return "Pagina para doctores a domicilio";
});
Route::get('/doctores/{nombre}', function ($nombre) {
    return "Pagi para doctores a domicilio, el nombre es: $nombre";
}); */
Route::get('/doctores', [DomicilioController::class, 'index']);
Route::get('/doctores/{nombre}', [DomicilioController::class, 'doctoradomicilio']);
Route::get('/doctores/{nombre}/{apellido}/{especialidad?}', function ($nombre, $especialidad = null) {
    if($especialidad)
        return "Pagina para doctores a domicilio, el nombre es: $nombre y de especialidad $especialidad";
    else {
        return "Pagina para doctores a domicilio, el nombre es: $nombre";
    }
});
