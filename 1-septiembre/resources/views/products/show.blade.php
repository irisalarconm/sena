@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <td>NOMBRE</td>
                        <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                        <td>DESCRIPCIÓN</td>
                        <td>{{$product->description}}</td>
                        </tr>
                        <tr>
                        <td>PRECIO</td>
                        <td>{{$product->price}}</td>
                        </tr>
                        <tr>
                        <td>EMPRESA</td>
                        <td>{{ $product->company->name}}</td>
                        </tr>
                        <tr>
                        <td>VISTA</td>
                        <td>IMAGEN</td>
                        </tr>
                    </thead>
                    </table>                   
                </div>
            </div>
            <a href="{{route('products.index')}}" class="btn btn-info btn-md">Volver</a>
            <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning btn-md">Editar</a>
        </div>
    </div>
        
@endsection