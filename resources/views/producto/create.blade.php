@extends('layouts.base')
@section('titulo','Sistema Gestion Ventas | Productos')
@section('contenido')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Productos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Nuevo Producto</li>
                        </ol>   
                        <form method="POST" action="{{ route('producto.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" >
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Stock</label>
                                <input type="text" class="form-control" name="stock" >
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Precio Unitario</label>
                                <input type="text" class="form-control" name="precio_venta" >
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Costo Unitario</label>
                                <input type="text" class="form-control" name="precio_costo" >
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Fecha Ingreso</label>
                                <input type="date" class="form-control" name="fecha_ingreso" >
                                
                            </div>
                            
                            <input type="submit" class="btn btn-primary" value="Guardar Producto">
                            </form>
</div>
@endsection