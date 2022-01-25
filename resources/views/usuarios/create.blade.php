@extends('usuarios.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2>Crear Nuevo Usuario</h2>
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
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo:</strong>
                    <input type="text" name="tipo" class="form-control" placeholder="Tipo de Empleado">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Correo:</strong>
                    <input type="text" name="email" class="form-control" placeholder="ejemplo@ejemplo.com">
                </div>
            </div>
            <br><br><br><br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Guardar</button>
            </div>
            <br><br>
        </div>
    </form>
@endsection