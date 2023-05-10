<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">{{ __('') }}
                </h2>
                <br>   
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <form action="{{route('clienteesp.update', $precio)}}" method="POST">
                    @method('PUT')
                    @include('clienteesp._form')
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>