<?php

use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\UsuariosController;
use App\Models\Documento;
use App\Models\Noticia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/soporte', function () {
    return view('soporte');
});

Route::get('/modulos', function () {
    return view('modulos.index');
});

Route::get('/modulos/{submodulo}', function () {
    $submodulo = explode('/', URL::current())[4];
    return view('modulos.submodulo', compact('submodulo'));
});

Route::get('/modulos/{submodulo}/{documentos}', function (Request $request) {
    $submodulo = explode('/', URL::current())[4];
    $tipo = explode('/', URL::current())[5];
    $busqueda = trim($request->get('busqueda'));
    $documentos = Documento::where('submoduloDoc', '=', $submodulo)
                ->where('tipoDoc', '=', $tipo)
                ->where('nombreDoc', 'LIKE','%'.$busqueda.'%')
                ->paginate(40);
    return view('modulos.document', compact('submodulo', 'documentos', 'tipo', 'busqueda'));
})->name('documentos');

Route::resource('/documentos', DocumentoController::class);

Route::get('/modulos/{submodulo}/{documentos}/create', function (Request $request) {
    $submodulo = explode('/', URL::current())[4];
    $tipo = explode('/', URL::current())[5];
    return view('documentos.crear', compact('submodulo', 'tipo'));
});