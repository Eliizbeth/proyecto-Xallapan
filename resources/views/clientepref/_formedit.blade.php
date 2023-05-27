@csrf
<!--input cliente-->
<label class="label">
    <span class="label-text">Cliente</span>
</label>
<select name="NoCliente" id="" class="select select-bordered w-full max-w-xs">
    @foreach($clientes as $cliente)
    <option value="{{$clientepref->NoCliente}}" @if($cliente->NoCliente === $clientepref->NoCliente) selected @endif">{{$cliente->NoCliente}}</option>
    @endforeach 
</select>

<!--input codigo barras-->
<label class="label">
    <span class="label-text">Código de barras</span>
</label>
<select name="CodigoBarras" id="" class="select select-bordered w-full max-w-xs">
    @foreach($productos as $producto)
    <option value="{{$producto->CodigoBarras}}" @if($clientepref->CodigoBarras === $producto->CodigoBarras) selected @endif"> {{$producto->CodigoBarras}} - {{$producto->Descripcion}}</option>
    @endforeach
</select>
<!--input precio contado-->
<label class="label">
    <span class="label-text">Precio contado</span>
</label>
<input type="text" name="Precio" class="input input-bordered w-full max-w-xs" value="{{$clientepref->Precio}}">
<!--input tipo cliente-->
<label class="label">
    <span class="label-text">Tipo cliente</span>
</label>
<select name="Credito" id="" class="select select-bordered w-full max-w-xs">
    <option value="1" @if($clientepref->Credito === 1) selected  @endif>Credito</option>
    <option value="0" @if($clientepref->Credito === 0) selected  @endif>Contado</option>
</select>
<!--input precio credito-->
<label class="label">
    <span class="label-text">Precio crédito</span>
</label>
<input type="text" name="PrecioCredito" class="input input-bordered w-full max-w-xs" value="{{$clientepref->PrecioCredito}}">

<!--input clave ruta-->
<label class="label">
    <span class="label-text">Clave ruta</span>
</label>
<select name="claveruta" id="" class="select select-bordered w-full max-w-xs">
    <option disabled selected>Selecciona ruta</option>
    @foreach($rutas as $ruta)
    <option value="{{$ruta->ClaveRuta}}" @if($ruta->ClaveRuta === $clientepref->claveruta) selected @endif">{{$ruta->ClaveRuta}}</option>
    @endforeach 
</select>

<div class="flex justify-between items-center">
    <a type="button" href="{{route('clientepref.index')}}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>