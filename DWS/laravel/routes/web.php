<?php

use Illuminate\Support\Facades\Route;
use App\mail\dragoMailable;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenosotros', function () {
    return view('sobrenosotros');
});

Route::get('/sugerencias', function () {
    return view('sugerencias');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/usuarios', ['UserController::class,
`index']);

Route::get('/contact',function(){
$correo = new dragoMailable;

Mail::to('destinatario@correo.com')->send($correo);
});
