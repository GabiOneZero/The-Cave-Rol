<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CestaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

/* Route::get('/', function () {
    return view('home');
}); */


//HOME-----------------------------------------------------------
Route::get('/home/{categoria?}', [ArticuloController::class, 'index'])->name('home');
//---------------------------------------------------------------

/* ============================================================================================== */

//LOGIN
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

//REGISTRO
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

//CERRAR SESIÓN
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

/* ============================================================================================== */

//TU HORARIO---------------------------------------------------------
Route::get('horario', function () {

    $horario = DB::table('turnos')->where('empleado_id', session('usuario_id'));


    return view('horario')->with('horario', $horario);
})->middleware('loginMiddleware')->name('horario');


//CESTA---------------------------------------------------------
Route::post('cesta/{articulo_id}/{cantidad?}', [CestaController::class, 'store'])->name('art.cesta.store');
Route::get('cesta', [CestaController::class, 'index'])->name('cesta');

//DETALLES ARTÍCULO-------------------------------------------
Route::get('articulo/{articulo_id}', function ($id) {

    $articulo = DB::table('articulos')->where('articulo_id', $id)->get()->first();

    return view('articulo')->with('articulo', $articulo);
})->name('articulo');

//POLÍTICAS--------------------------------------------
Route::get('/politicas', function () {
    return view('politicas');
})->name('politicas');

//SOBRE NOSOTROS---------------------------------------
Route::get('/sobre_nosotros', function () {
    return view('sobre_nosotros');
})->name('sobre_nosotros');

//CONTACTO---------------------------------------------
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

//USUARIOS------------------------------------------------
Route::get('usuario', [UsuarioController::class, 'index'])->middleware('loginMiddleware')->name('usuario');
Route::post('usuario', [UsuarioController::class, 'store'])->name('usuario.store');
Route::delete('usuario/{usuario}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
