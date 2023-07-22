<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ingresos') }}
        </h2>
    </x-slot>
    <div class="py-3">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        ¿Desea eliminar el Ingreso de Material: {{ $ingreso->cantidad }}?
                        <br>
                        <br>
                        <form action="/Ingresos/{{ $ingreso->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            <a class="btn btn-primary" href="/Ingresos">Regresar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
