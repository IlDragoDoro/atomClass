<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BiografiaController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\InicialController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\SugerenciasController;
use App\Http\Controllers\SaveBlog;

//mail
use App\Mail\NombreMailable;
use Illuminate\Suppost\Facades\Mail;


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

Route::get('/', InicialController::class);
Route::get('/registro', [InicialController::class,'registro']);
Route::get('/store', [InicialController::class,'store']);
Route::get('/iniciaSesion', [InicialController::class,'iniciaSesion']);
Route::get('/comprueba', [FormularioController::class, 'comprueba']);
Route::get('/savePost', [saveBlog::class, 'saveIt']);
Route::get('/main', [FormularioController::class,'main']);
Route::get('/biografia', BiografiaController::class);
Route::get('/formulario', FormularioController::class);
Route::get('/libros', LibrosController::class);
Route::get('/sugerencias', SugerenciasController::class);
Route::get('/savesuggestion', [SugerenciasController::class, 'saveSuggest']);

//mail


/*Route::get('/', function () {
    //return view('welcome');
});
*/
