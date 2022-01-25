@extends('usuarios.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2> Usuario </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuarios.index') }}"><i class="fas fa-chevron-left"></i> Regresar </a>
            </div>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h2><strong>Tipo de Empleado:</strong>
                {{ $usuario->tipo }}</h2>
            </div>
        </div>
        <br><br><br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Nombre:</strong>
                {{ $usuario->nombre }}</h3>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h3><div class="form-group">
                <strong>Apellido:</strong>
                {{ $usuario->apellido }}</h3>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Correo:</strong>
                {{ $usuario->email }}</h3>
            </div>
        </div>
        <br><br>
        
    </div>
@endsection