@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6 offset-md-4">
            <form action="{{route('products.update', $product->id)}}" method="POST">
                @csrf
                @method('PUT')
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <td>NOMBRE</td>
                        <td><input type="text" class="form-control" name="name" value="{{$product->name}}"></td>
                        </tr>
                        <tr>
                        <td>DESCRIPCIÓN</td>
                        <td><input type="text" class="form-control" name="description" value="{{$product->description}}"></td>
                        </tr>
                        <tr>
                        <td>PRECIO</td>
                        <td><input type="text" class="form-control" name="price" value="{{$product->price}}"></td>
                        </tr>
                        <tr>
                        <td>EMPRESA</td>
                        <td>{{$product->company->name}}</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><input type="file" class="form-control" name="image" value="{{$product->image}}"></td>
                        </tr>
                    </thead>
                    </table>                   
                </div>
            </div>
            <button type="submit" class="btn btn-warning btn-md">Guardar</a>
            <a href="{{route('products.index')}}" class="btn btn-info btn-md">Volver</a>
            </form>
        </div>
    </div>
        
@endsection