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
})->middleware('auth');

Route::get('/modulos', function () {
    return view('modulos.index');
})->middleware('auth');

Route::get('/modulos/{modulo}/{submodulo}', ['middleware' =>'procesos:'.URL::current(), function () {
    $modulo = explode('/', URL::current())[4];
    $submodulo = explode('/', URL::current())[5];
    return view('modulos.submodulo', compact('modulo','submodulo'));
}])->middleware('auth');

Route::get('/obsoletos/{modulo}/{submodulo}', ['middleware' =>'procesos:'.URL::current(), function () {
    $modulo = explode('/', URL::current())[4];
    $submodulo = explode('/', URL::current())[5];
    return view('modulos.obsoletos', compact('modulo','submodulo'));
}])->middleware('auth');

Route::get('/modulos/{modulo}/{submodulo}/{documentos}', ['middleware' => 'procesos:'.URL::current(), function (Request $request) {
    $modulo = explode('/', URL::current())[4];
    $submodulo = explode('/', URL::current())[5];
    $tipo = explode('/', URL::current())[6];
    $busqueda = trim($request->get('busqueda'));
    $documentos = Documento::where('submoduloDoc', '=', $submodulo)
                ->where('tipoDoc', '=', $tipo)
                ->where('estadoDoc', '=', 'Aprobado')
                ->where('nombreDoc', 'LIKE','%'.$busqueda.'%')
                ->paginate(40);
    return view('modulos.document', compact('modulo','submodulo', 'documentos', 'tipo', 'busqueda'));
}])->name('documentos')->middleware('auth');

Route::get('/obsoletos/{modulo}/{submodulo}/{documentos}', ['middleware' => 'procesos:'.URL::current(), function (Request $request) {
    $modulo = explode('/', URL::current())[4];
    $submodulo = explode('/', URL::current())[5];
    $tipo = explode('/', URL::current())[6];
    $busqueda = trim($request->get('busqueda'));
    $documentos = Documento::where('submoduloDoc', '=', $submodulo)
                ->where('tipoDoc', '=', $tipo)
                ->where('estadoDoc', '=', 'Obsoleto')
                ->where('nombreDoc', 'LIKE','%'.$busqueda.'%')
                ->paginate(40);
    return view('modulos.documentobsoleto', compact('modulo','submodulo', 'documentos', 'tipo', 'busqueda'));
}])->name('documentos')->middleware('auth');

Route::resource('/documentos', DocumentoController::class);

Route::get('/modulos/{modulo}/{submodulo}/{documentos}/create', ['middleware' => 'procesos:'.URL::current(), function (Request $request) {
    $modulo = explode('/', URL::current())[4];
    $submodulo = explode('/', URL::current())[5];
    $tipo = explode('/', URL::current())[6];
    return view('documentos.crear', compact('modulo', 'submodulo', 'tipo'));
}])->middleware('gestor')->middleware('auth');

Route::get('/modulos/{modulo}/{submodulo}/{documentos}/revisar', ['middleware' => 'procesos:'.URL::current(), function (Request $request) {
    $modulo = explode('/', URL::current())[4];
    $submodulo = explode('/', URL::current())[5];
    $tipo = explode('/', URL::current())[6];
    $busqueda = trim($request->get('busqueda'));
    $documentos = Documento::where('submoduloDoc', '=', $submodulo)
                ->where('tipoDoc', '=', $tipo)
                ->where('estadoDoc', '=', 'Pendiente Revisión')
                ->where('nombreDoc', 'LIKE','%'.$busqueda.'%')
                ->paginate(40);
    return view('documentos.revisar', compact('modulo', 'submodulo', 'documentos', 'tipo', 'busqueda'));
}])->middleware('admin')->middleware('auth');


Route::post('/contactar', [App\Http\Controllers\SoporteController::class, 'contact'])->name('contact');

Route::put('/obsoleto/{documento}', [App\Http\Controllers\DocumentoController::class, 'obsoleto'])->name('obsoleto');

Route::get('/unauthorized401', function() {
    return view('errors.401');
});