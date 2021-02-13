<?php
//Todos los use para cada controlador
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\biografiaController;
use App\Http\Controllers\bibliografiaController;
use App\Http\Controllers\sugerenciasController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\loginController;
use App\Mail\sugerenciasMailable;
use Illuminate\Support\Facades\Mail;
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
//Todas las rutas
Route::get('/', function () {
    return view('welcome');
});
Route::get('/registrarse',[registroController::class,'visualizar']);
Route::get('/registro',[registroController::class,'recogeDatos']);
Route::get('/login',[loginController::class,'login']);
Route::get('/welcome', welcomeController::class);
Route::get('/index', indexController::class);
Route::get('/biografia', biografiaController::class);
Route::get('/bibliografia', bibliografiaController::class);
Route::get('/sugerencias', sugerenciasController::class);

Route::get('/sesion',[loginController::class,'sesion']);
Route::get('/entrar',[indexController::class,'recogeEntrada']);
Route::get('/sugerir',[sugerenciasController::class,'guarda']);
