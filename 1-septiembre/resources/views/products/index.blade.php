@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('products.create')}}" class="btn btn-primary btn-sm mb-3 mt-3">Nuevo Registro</a>
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE PRODUCTO</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">IMAGEN</th>
                <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($products as $product)
                
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{ $product->company->name}}</td>
                <td>{{$product->image}}</td>
                <td>
                    <a href="{{route('products.show', $product->id)}}" class="btn btn-info">Detalles</a>
                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Editar</a>
                    <a href="" class="btn btn-danger">Eliminar</a>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
        
@endsection