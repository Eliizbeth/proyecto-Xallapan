@extends('template')
@section('content')
    <h1>Clientes</h1>
    <table>
    <thead>
        <tr>
        <th scope>No.Cliente</th>
        <th scope>Nombre</th>
        <th scope>Direccion</th>
        <th scope>Telefono</th>
        <th scope>Lista_precio</th>
        </tr>
    </thead>
        <tbody>
        @foreach ($clientes as $cliente)
         <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente['nombre']}}</td>
            <td>{{$cliente['direccion']}}</td>
            <td>{{$cliente['telefono']}}</td>
            <td>{{$cliente['precio']}}</td>
        
         </tr>
            <strong></strong>
            <a href="{{route('agregarcliente')}}"></a>
     
         </p>
    @endforeach

        </tbody>
    </table>

   


    <a href="{{route('agregarcliente')}}">Agregar cliente</a>
@endsection