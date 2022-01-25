@extends('usuarios.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2>Editar Usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuarios.index') }}"><i class="fas fa-chevron-left"></i> Regresar</a>
            </div>
            <br>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Espera!</strong> Hay campos sin llenar<br><br>
        </div>
    @endif
    <form action="{{ route('usuarios.update',$usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo de Empleado:</strong>
                    <input type="text" name="tipo" value="{{ $usuario->tipo }}" class="form-control" placeholder="Tipo de Empleado">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $usuario->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    <input type="text" name="apellido" value="{{ $usuario->apellido }}" class="form-control" placeholder="Apellido">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Correo:</strong>
                    <input type="email" name="email" value="{{ $usuario->email }}" class="form-control" placeholder="ejemplo@ejemplo.com">
                </div>
            </div>
            <br><br><br><br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
            <br><br>
        </div>
    </form>
@endsection