@csrf
<label for="uppercase  text-gray-700 text-xs"><b>NoCliente</b></label>
<select name="NoCliente" id="" class="rounded border-gray-200 w-full mb-4">
    <option disabled selected>Selecciona cliente</option>
    @foreach($clientes as $cliente)
    <option value="{{old('NoCliente', $cliente->NoCliente)}}">{{$cliente->NoCliente}} - {{$cliente->nombre}}</option>
    @endforeach 
</select>

<label for="uppercase  text-gray-700 text-xs"><b> Código Barras</b></label>
<select name="CodigoBarras" id="" class="rounded border-gray-200 w-full mb-4">
    <option disabled selected>Selecciona producto</option>
    @foreach($productos as $producto)
    <option value="{{old('CodigoBarras', $producto->CodigoBarras)}}">{{$producto->CodigoBarras}} - {{$producto->Descripcion}}</option>
    @endforeach 
</select>

<label for="uppercase  text-gray-700 text-xs"><b>Precio Contado</b></label>
<input type="text" name="Precio" class="rounded border-gray-200 w-full mb-4" value="{{$precio->Credito}}">
<select name="Credito" id="" class="rounded border-gray-200 w-full mb-4">
    <option value="" selected>Selecciona opción</option>
    <option value="1">Crédito</option>
    <option value="0">Contado</option>
</select>
<label for="uppercase  text-gray-700 text-xs"><b>Precio Crédito</b> </label>
<input type="text" name="PrecioCredito" class="rounded border-gray-200 w-full mb-4" value="{{$precio->PrecioCredito}}">

<label for="uppercase  text-gray-700 text-xs"><b>Clave ruta</b></label>
<select name="claveruta" id="" class="rounded border-gray-200 w-full mb-4">
    <option disabled selected>Selecciona ruta</option>
    @foreach($rutas as $ruta)
    <option value="{{old('ClaveRuta', $ruta->ClaveRuta)}}">{{$ruta->ClaveRuta}}</option>
    @endforeach 
</select>




<div class="flex justify-between items-center">
    <a type="button" href="{{route('clienteesp.index')}}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>