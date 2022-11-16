<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::paginate(10);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->cedula = $request->cedula;
        $user->telefono = $request->telefono;
        $user->ciudad = $request->ciudad;
        $user->email = $request->email;
        $request->validate([
            'password' => 'required|confirmed|min:6'
        ]);
        $user->password = Hash::make($request->password);
        $user->rol = $request->rol;
        $procesos = '';
        foreach($request->procesos as $item){
            $procesos = $procesos.$item.'|';
        }
        $user->area = $procesos;
        $user->save();
        return Redirect::route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $usuario->name = $request->name;
        $usuario->cedula = $request->cedula;
        $usuario->telefono = $request->telefono;
        $usuario->ciudad = $request->ciudad;
        $usuario->email = $request->email;
        $usuario->rol = $request->rol;
        $procesos = '';
        foreach($request->procesos as $item){
            $procesos = $procesos.$item.'|';
        }
        $usuario->area = $procesos;
        $usuario->save();
        return Redirect::route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return Redirect::route('usuarios.index');
    }
}
