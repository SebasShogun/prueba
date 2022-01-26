@extends('usuarios.layout')

@section('content')
    <div class="container"> 
        <br>
        <h2>Tabla de Usuarios</h2>
        <div class="container">
            <a class="btn btn-success" href="{{ route('usuarios.create') }}"><i class="fas fa-plus"></i> <b>Nuevo Empleado</b></a>
        </div>
        <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <b>{{ $message }}</b>
        </div>
        @endif
        <table class="table">
            <thead class="bg-dark text-white" style="font-weight:bold;">
                <tr>
                    <td>ID</td>
                    <td>Tipo de Usuario</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Correo</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->tipo}}</td>
                    <!-- <td>{{$usuario->tipo}}</td> -->
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellido}}</td>
                    <td>{{$usuario->email}}</td>
                    <td> 
                        <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                            <a class="btn btn-secondary" href="{{ route('usuarios.show',$usuario->id) }}"><i class="far fa-eye"></i></a>
                            <a class="btn btn-primary" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="far fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection