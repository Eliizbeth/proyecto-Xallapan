<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!--<div>
                <h2>
                    <a href="{{route('clienteesp.index')}}"class="bg-gray-800 text-white rounded px-1 py-1">Clientes preferenciales</a>
                </h2>
                <br>   
            </div>-->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" >
                     <!--boton agregar clientes-->
                    <div>
                        <h2 class="font-semibold text-lg text-gray-800 leading-normal flex items-center justify-between">{{ __('Clientes') }}    
                            <a href="{{route('clientes.create')}}"  class="bg-gray-800 text-white rounded px-4 py-2">Agregar Cliente</a>
                        </h2>
                        <br>   
                    </div>
                    <!--Buscador-->
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="rounded border-gray-200 w-96 mb-3" placeholder="Buscar No.Cliente">
                            <input type="submit" value="Buscar" class="bg-gray-800 text-white rounded px-4 py-2">
                        </div>
                        <br>
                    </form>
                    <!--Tabla clientes-->
                    <table class="mb-4">
                        <thead>
                            <tr>
                            <th scope>No.Cliente</th>
                            <th scope>Nombre</th>
                            <th scope>Dirección</th>
                            <th scope>Teléfono</th>
                            <th scope>Lista_precio</th>
                            <th></th>
                            <th scope>Acciones</th>
                            </tr>
                        </thead>
                            @foreach($clientes as $cliente)
                    
                        <tr class="border-b border-gray-200 tx-sm">
                            <td class="px-6 py-4">{{$cliente->NoCliente}}</td>
                            <td class="px-6 py-4">{{$cliente->nombre}}</td>
                            <td class="px-6 py-4">{{$cliente->direccion}}</td>
                            <td class="px-6 py-4">{{$cliente->telefono_fijo}}</td>
                            <td class="px-6 py-4">{{$cliente->CodigoListaPrecio}}</td>
                            <td class="px-6 py-4">
                                <button class="bg-gray-800 text-white rounded px-4 py-2">
                                <a href="{{route('clientes.edit', $cliente)}}" >Editar</a>

                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('clientes.destroy', $cliente)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input 
                                    type="submit" 
                                    value="Eliminar"
                                    class="bg-gray-800 text-white rounded px-4 py-2"
                                    onclick="return confirm('Desea eliminar')">
                                
                                </form>
                            </td>
                        </tr>
                    
                        @endforeach
                    </table>
                    {{ $clientes->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
