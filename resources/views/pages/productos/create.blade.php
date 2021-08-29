@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-3">Registrar Producto</h4>
    <form method="POST" action="{{route('productos.store')}}">
        <input id="formMethod" name="_method" type="hidden" value="POST">

        <div class="row g-3">
            <div class="col-sm-6">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Nombre de la categoria">
            </div>
            <div class="col-sm-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo">
            </div>
            <div class="col-12">
                <label for="desc" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="desc" name="desc" placeholder="Descripcion del producto">
            </div>
            <div class="col-md-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca del producto ">
            </div>
            <div class="col-md-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad a comprar">
            </div>
            <div class="col-md-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio del producto">
            </div>
            <input value="Registrar" type="submit" name="boton"
            style="background-color: #fff; font-size: 20px; border-radius: 8px; margin-left: 500px;margin-top: 30px;">
            </div>  
        
        

@endsection
