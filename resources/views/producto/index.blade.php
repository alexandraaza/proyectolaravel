@extends('layouts.base')
@section('titulo','Sistema Gestion Ventas | Productos')
@section('contenido')
<div class="container-fluid px-4">
                        <h1 class="mt-4">Productos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Listado</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <a class="btn btn-primary" href="{{ route('producto.create') }}" role="button">Agregar Producto</a>
                               
                            </div>

                            

                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Descripcion</th>
                                            <th>Precio Venta</th>
                                            <th>Precio Compra</th>
                                            <th>Stock</th>
                                            <th>Fecha Ingreso</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($productos as $producto)
                                        <tr>
                                            <td>{{ $producto->id }}</td>
                                            <td>{{ $producto->descripcion }}</td>
                                            <td>{{ $producto->precio_venta }}</td>
                                            <td>{{ $producto->precio_costo }}</td>
                                            <td>{{ $producto->stock }}</td>
                                            <td>{{ $producto->fecha_ingreso }}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection