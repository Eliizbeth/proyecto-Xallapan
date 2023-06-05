@csrf
<label class="label">
    <span class="label-text">No.Cliente</span>
</label>
<input type="text" name="NoCliente" class="input input-bordered w-full max-w-xs" value="{{$ultimocliente->NoCliente + 1}}" readonly>
<br>
<label class="label">
    <span class="label-text">Nombre</span>
</label>
<span class="text-xs text-red-600">@error('nombre'){{ $message }} @enderror</span>
<input type="text" name="nombre" class="input input-bordered w-full max-w-xs" value="{{old('nombre', $cliente->nombre)}}">

<label class="label">
    <span class="label-text">Dirección</span>
</label>
<span class="text-xs text-red-600">@error('direccion'){{ $message }} @enderror</span>
<input type="text" name="direccion" class="input input-bordered w-full max-w-xs" value="{{old('direccion', $cliente->direccion)}}">

<label class="label">
    <span class="label-text">Teléfono</span>
</label>
<span class="text-xs text-red-600">@error('telefono_fijo'){{ $message }} @enderror</span>
<input type="text" name="telefono_fijo" class="input input-bordered w-full max-w-xs" value="{{old('telefono_fijo', $cliente->telefono_fijo)}}">
<label class="label">
    <span class="label-text">Código precio</span>
</label>
<select class="select select-bordered w-full max-w-xs" name="CodigoListaPrecio" >
    @foreach($listas as $lista)
    <option value="{{old('Codigo', $lista->Codigo)}}" selected>{{$lista->Codigo}} - {{$lista->Nombre}}</option>
    @endforeach 
    <option disabled selected>Selecciona Código</option>
</select>
<!--
<select class="livesearch form-control" name="CodigoListaPrecio" id="search">
</select>
-->
<div class="flex justify-between items-center">
    <a type="button" href="{{route('clientes.index')}}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
