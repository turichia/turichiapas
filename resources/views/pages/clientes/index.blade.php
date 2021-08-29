@extends('layouts.app')

@section('content')
    <center>
        <h1>Clientes</h1>
    </center>
    <br>
    @if(count($lista)>0)
        <table class="table">
            <thead class="thead">
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Direccion</th>
                    <th>Colonia</th>
                    <th>Ciudad</th>
                    <th>Municipio</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
            @foreach($lista as $cliente)
                <tr>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>{{$cliente->colonia}}</td>
                    <td>{{$cliente->ciudad}}</td>
                    <td>{{$cliente->municipio}}</td>
                    <td>{{$cliente->estado}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No existe ningun registro</p>
    @endif
@endsection
