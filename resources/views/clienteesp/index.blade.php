<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h2 class="font-semibold text-lg text-gray-800 leading-normal flex items-center justify-between">{{ __('Clientes preferenciales') }}    
                    <a href="{{route('clienteesp.create')}}"  class="bg-gray-800 text-white rounded px-4 py-2">Asignar precio</a>
                </h2>
                <br>   
            </div>
            <form action="">
                 <div class="input-group mb-3">
                    <input type="text" name="search" class="rounded border-gray-200 w-96 mb-3" placeholder="Buscar No.Cliente/Nombre cliente">
                    <input type="submit" value="Buscar" class="bg-gray-800 text-white rounded px-4 py-2">
                </div>
                <br>
            </form>
           
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="mb-4 border-collapse border">
                        <thead>
                            <tr>
                            <th class="border border-slate-300" >No.Cliente</th>
                            <th class="border border-slate-300" scope>Nombre</th>
                            <th class="border border-slate-300" scope>Código Barras</th>
                            <th class="border border-slate-300" scope>Precio</th>
                            <th class="border border-slate-300" scope>Precio crédito</th>
                            <th class="border border-slate-300" scope>crédito</th>
                            <th class="border border-slate-300" scope>clave ruta</th>
                            <th class="border border-slate-300" scope>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($precios as $precio)
                    
                        <tr class="border-b border-gray-200 tx-sm">
                            <td class="px-6 py-4 border border-slate-300">{{$precio->NoCliente}}</td>
                            <td class="px-6 py-4 border border-slate-300">{{$precio->nombre}}</td>
                            <td class="px-6 py-4 border border-slate-300">{{$precio->CodigoBarras}}</td>
                            <td class="px-6 py-4 border border-slate-300">{{$precio->Precio}}</td>
                            <td class="px-6 py-4 border border-slate-300">{{$precio->PrecioCredito}}</td>
                            <td class="px-6 py-4 border border-slate-300">{{$precio->Credito}}</td>
                            <td class="px-6 py-4 border border-slate-300">{{$precio->claveruta}}</td>

                            <!--
                            <td class="px-6 py-4">
                                <a href="{{route('clienteesp.edit', $precio)}}">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('clienteesp.destroy', $precios)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input 
                                    type="submit" 
                                    value="Eliminar"
                                    class="bg-gray-800 text-white rounded px-4 py-2"
                                    onclick="return confirm('¿Desea eliminar?')">
                                
                                </form>
                            </td>
                            -->
                        </tr>
                    
                        @endforeach
                    </table>
                    {{ $precios->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
