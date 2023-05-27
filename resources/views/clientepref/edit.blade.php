<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                </h2>
                <br>   
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">{{ __('Editar precio') }}</h2>
                    <br>
                   <form action="{{route('clientepref.update',$clientepref)}}" method="POST">
                    @method('PUT')
                    @include('clientepref._formedit')
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>