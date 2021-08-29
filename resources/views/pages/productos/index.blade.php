@extends('layouts.app')

@section('content')
    <div style="position: relative; top: 10%; text-align: center;">
        <h1>Productos</h1>
    </div>
    <a href="{{route('productos.create')}}" class="btn btn-info" style="position:fixed; bottom:40px; right: 40px; font-size: 24px;">+ Agregar</a>
    <br><br>

    @if( count($lista)>0 )
        <div class="row" style="text-align: center;">
            <div class="col-2">
                <h3>Categoria</h3>
            </div>

            <div class="col-6">
                <h3>Producto</h3>
            </div>
            <div class="col-2">
                <h3>Cantidad</h3>
            </div>
            <div class="col-2">
                <h3>Precio</h3>
            </div>
        </div>  

        @foreach( $lista as $producto )
        <div class="row" style="text-align: center;">
            <div class="col-2">
                <p>{{$producto->categoria}}</p>
            </div>
            <div class="col-6">
                <p>{{$producto->nombre}} {{$producto->descripcion}} {{$producto->marca}}</p>
            </div>
            <div class="col-2">
                <p>{{$producto->cantidad}}</p>
            </div>
            <div class="col-2">
                <p>$ {{$producto->precio}}</p>
            </div>
            
        </div>
        @endforeach
    @else
        <p style="text-align: center;">No hay productos registrados. Agrega Productos dando click en el boton "+" en la esquina inferior derecha</p>
    @endif

@endsection