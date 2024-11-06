@extends('layouts.base')
@section('titulo','Sistema Gestion Ventas | Clientes')
@section('contenido')

<div class="container-fluid px-4">
    <h1 class="mt-4">Clientes</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Nuevo Cliente</li>
    </ol>   
    <form method="POST" action="{{ route('cliente.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Documento</label>
            <input type="text" class="form-control" name="documento" maxlength="15" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Documento</label>
            <input type="number" class="form-control" name="cod_tipo_documento" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombres" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" maxlength="20">
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad</label>
            <input type="number" class="form-control" name="cod_ciudad" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" maxlength="20">
        </div>
        
        <input type="submit" class="btn btn-primary" value="Guardar Cliente">
    </form>
</div>
@endsection
