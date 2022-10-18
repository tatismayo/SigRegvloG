<?php

use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\UsuariosController;
use App\Models\Noticia;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    $noticias = Noticia::all();
    $usuarios = User::all();
    return view('welcome', compact('noticias','usuarios'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/usuarios', UsuariosController::class);

Route::resource('/noticias', NoticiaController::class);