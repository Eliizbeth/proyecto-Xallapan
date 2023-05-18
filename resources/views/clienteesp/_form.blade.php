@csrf
<!--input cliente-->
<label class="label">
    <span class="label-text">Cliente</span>
</label>
<select name="NoCliente" id="" class="select select-bordered w-full max-w-xs">
    @foreach($clientes as $cliente)
    <option value="{{old('NoCliente', $cliente->NoCliente)}}">{{$cliente->NoCliente}} - {{$cliente->nombre}}</option>
    @endforeach 
    <option disabled selected>Selecciona cliente</option>
</select>

<!--input codigo barras-->
<label class="label">
    <span class="label-text">Código de barras</span>
</label>
<select name="CodigoBarras" id="" class="select select-bordered w-full max-w-xs">
    @foreach($productos as $producto)
    <option value="{{old('CodigoBarras', $producto->CodigoBarras)}}">{{$producto->CodigoBarras}} - {{$producto->Descripcion}}</option>
    @endforeach 
    <option disabled selected>Selecciona producto</option>
</select>
<!--input precio contado-->
<label class="label">
    <span class="label-text">Precio contado</span>
</label>
<input type="text" name="Precio" class="input input-bordered w-full max-w-xs" value="{{$precio->Credito}}">
<!--input tipo cliente-->
<label class="label">
    <span class="label-text">Tipo cliente</span>
</label>
<select name="Credito" id="" class="select select-bordered w-full max-w-xs">
    <option value="1">Crédito</option>
    <option value="0">Contado</option>
    <option disabled selected>Selecciona crédito/contado</option>
</select>
<!--input precio credito-->
<label class="label">
    <span class="label-text">Precio crédito</span>
</label>
<input type="text" name="PrecioCredito" class="input input-bordered w-full max-w-xs" value="{{$precio->PrecioCredito}}">

<!--input clave ruta-->
<label class="label">
    <span class="label-text">Clave ruta</span>
</label>
<select name="claveruta" id="" class="select select-bordered w-full max-w-xs">
    <option disabled selected>Selecciona ruta</option>
    @foreach($rutas as $ruta)
    <option value="{{old('ClaveRuta', $ruta->ClaveRuta)}}">{{$ruta->ClaveRuta}}</option>
    @endforeach 
</select>




<div class="flex justify-between items-center">
    <a type="button" href="{{route('clienteesp.index')}}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>