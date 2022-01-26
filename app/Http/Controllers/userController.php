<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\TipoUsuario;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $global = new userController;
        $usuarios = Usuario::All();
        return view('usuarios.index', compact('usuarios','global'));
    }

    // public function getNombreTipo($id)
    // {
    // $array = TipoUsuario::find($id);
    // $value = array_get($array, 'tipo_usuario');
    //     return $value;
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = TipoUsuario::All();
        return view('usuarios.create', compact('tipo'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'tipo' => 'required',
                'nombre' => 'required',
                'apellido' => 'required',
                'email' => 'required',
            ]);
            Usuario::create($request->all());
            return redirect()->route('usuarios.index')->with('success', 'Usuario creado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        $tipo = TipoUsuario::All();
        return view('usuarios.edit',compact('usuario','tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Usuario $usuario)
    {
        $request->validate([
            'tipo' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
        ]);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success','Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success','Usuario borrado');
    }
}
