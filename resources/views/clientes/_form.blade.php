@csrf
<label for="uppercase  text-gray-700 text-xs">NoCliente</label>
<input type="text" name="NoCliente" class="rounded border-gray-200 w-full mb-4" value="{{$ultimocliente->NoCliente + 1}}">

<label for="uppercase  text-gray-700 text-xs">Nombre</label>
<span class="text-xs text-red-600">@error('nombre'){{ $message }} @enderror</span>
<input type="text" name="nombre" class="rounded border-gray-200 w-full mb-4" value="{{old('nombre', $cliente->nombre)}}">

<label for="uppercase  text-gray-700 text-xs">Dirección</label>
<span class="text-xs text-red-600">@error('direccion'){{ $message }} @enderror</span>
<input type="text" name="direccion" class="rounded border-gray-200 w-full mb-4" value="{{old('direccion', $cliente->direccion)}}">

<label for="uppercase  text-gray-700 text-xs">Teléfono</label>
<span class="text-xs text-red-600">@error('telefono_fijo'){{ $message }} @enderror</span>
<input type="text" name="telefono_fijo" class="rounded border-gray-200 w-full mb-4" value="{{old('telefono_fijo', $cliente->telefono_fijo)}}">

<select name="CodigoListaPrecio" id="" class="rounded border-gray-200 w-full mb-4">
    <option value="">Selecciona precio</option>
    @foreach($listas as $lista)
    <option value="{{old('Codigo', $lista->Codigo)}}" selected>{{$lista->Codigo}} - {{$lista->Nombre}}</option>
    @endforeach 
</select>
<div class="flex justify-between items-center">
    <a type="button" href="{{route('clientes.index')}}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>