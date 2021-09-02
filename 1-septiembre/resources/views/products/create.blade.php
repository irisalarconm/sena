@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6 offset-md-4">
            <form action="{{route('products.store')}}" method="POST">
                @csrf
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <td>NOMBRE</td>
                        <td><input type="text" class="form-control" name="name" value=""></td>
                        </tr>
                        <tr>
                        <td>DESCRIPCIÓN</td>
                        <td><input type="text" class="form-control" name="description" value=""></td>
                        </tr>
                        <tr>
                        <td>PRECIO</td>
                        <td><input type="text" class="form-control" name="price" value=""></td>
                        </tr>
                        <tr>
                        <td>EMPRESA</td>
                        <td><input type="text" class="form-control" name="price" value=""></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><input type="file" class="form-control" name="image" value=""></td>
                        </tr>
                    </thead>
                    </table>                   
                </div>
            </div>
            <button type="submit" class="btn btn-warning btn-md">Crear nuevo Registro</a>
            <a href="{{route('products.index')}}" class="btn btn-info btn-md">Volver</a>
            </form>
        </div>
    </div>
        
@endsection