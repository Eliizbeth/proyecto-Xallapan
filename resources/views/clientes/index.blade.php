<x-app-layout>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-black-900" >
                    <div class="flex justify-between">
                        <div class="flex space-x-6">
                            <!--buscador clientes-->
                        <div class="-order-2">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" name="search" class="input input-bordered input-sm" placeholder="Buscar No.Cliente/Nombre cliente">
                                    <button type="submit" value="Buscar" class="btn btn-square btn-sm" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                    </button>
                                </div>
                                <br>
                            </form>
                        </div>
                            <!--Botón agregar clientes-->
                            <div>
                                <button class="btn btn-sm leading-normal flex items-center justify-between bg-lime-600">
                                    <a href="{{route('clientes.create')}}"  class="text-blue-900">Agregar Cliente</a>
                                </button>
                            </div>
                        </div>  
                        <!--botón clientes preferenciales-->
                        <div class="order-last">
                             <button class="btn btn-sm leading-normal flex items-center justify-between bg-lime-600">
                                <a href="{{route('clientepref.index')}}"  class="text-blue-900">Clientes preferenciales</a>
                             </button>
                        </div>   
                    </div>
                     <!--Notificaciones-Alertas-->
                    @if (session()->has('message'))
                        <div class="alert alert-success shadow-lg">
                            <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>                            <span>{{ session()->get('message')}}</span>
                            </div>
                        </div>
                    @endif

                    <!--Tabla clientes-->
                    <div class="overflow-x-auto h-96">
                        <table class="table table-zebra w-full">
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
                                <td class="px-6 py-4"><b>{{$cliente->NoCliente}}</b></td>
                                <td class="px-6 py-4">{{$cliente->nombre}}</td>
                                <td class="px-6 py-4">{{$cliente->direccion}}</td>
                                <td class="px-6 py-4">{{$cliente->telefono_fijo}}</td>
                                <td class="px-6 py-4">{{$cliente->CodigoListaPrecio}}</td>
                                <td class="px-6 py-4">
                                    <button class="btn btn-sm leading-normal flex items-center justify-between bg-lime-600">
                                    <a href="{{route('clientes.edit', $cliente)}}" >Editar</a>

                                    </button>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('clientes.destroy', $cliente)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input 
                                        type="submit" 
                                        value="Deshabilitar"
                                        class="btn btn-sm bg-lime-600 no-animation"
                                        onclick="return confirm('Desea eliminar')">
                                    
                                    </form>
                                </td>
                            </tr>
                        
                            @endforeach
                        </table>

                    </div>
                    {{ $clientes->links()}}
                </div>
            </div>
        </div>
   
    </div>
</x-app-layout>
