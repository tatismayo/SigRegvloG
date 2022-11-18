<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NoticiaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('noticias');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        $usuarios = User::all();
        return view('welcome', compact('noticias','usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticias.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new Noticia();
        $request->validate([
            'imagen' => 'image|max:2048'
        ]);
        $noticia->ImagenNoticia = $request->imagen->store('noticias', 'imagenes');
        $noticia->Titulo = $request->titulo;
        $noticia->Noticia = $request->noticia;
        $noticia->Enlace = $request->enlace;
        $noticia->Fecha = now();
        $noticia->User_id = auth()->id();
        $noticia->save();
        return Redirect::route('noticias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        return view('noticias.editar', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        if($request->imagen){
            $request->validate([
                'imagen' => 'image|max:2048'
            ]);
            $noticia->ImagenNoticia = $request->imagen->store('noticias', 'imagenes');
        }
        $noticia->Titulo = $request->titulo;
        $noticia->Noticia = $request->noticia;
        $noticia->Enlace = $request->enlace;
        $noticia->Fecha = now();
        $noticia->User_id = auth()->id();
        $noticia->save();
        return Redirect::route('noticias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return Redirect::route('noticias.index');
    }
}
