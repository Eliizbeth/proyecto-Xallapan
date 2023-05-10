@extends('template')
@section('content')
    <h1>Agregar cliente</h1>
    <form action="">
        <p>
            <label for="nombre">Nombre</label><br>
            <input type="text" name= "nombre">
        </p>
        <p>
            <label for="direccion">Dirección</label><br>
            <input type="text" name= "direccion">
        </p>
        <p>
            <label for="telefono">Telefono</label><br>
            <input type="text" name= "telefono">
        </p>
        <p>
            <label for="precio">Precio lista</label><br>
            <select name="precio" id="precio">
                <option value="">Seleccionar Precio</option>
            </select>
        </p>
        <p>
           <button type ="submit">Agregar</button>
        </p>
        
    </form>
    
@endsection