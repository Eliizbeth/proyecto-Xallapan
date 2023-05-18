<x-app-layout>
    <div class="py-1">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                   <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">{{ __('Nuevo Cliente') }}</h2>
                   <br>
                   <form action="{{route('clientes.store')}}" method="POST">
                    @include('clientes._form')
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

