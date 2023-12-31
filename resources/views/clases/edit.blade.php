<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar clase') }}
        </h2>
        @can('create', App\models\Clase::class)
        <livewire:boton-eliminar :dato="'eliminarClase'" :ideliminar="$clase->id">        
        @endcan
    </x-slot>
        <livewire:formulario-editar-clase :clase="$clase">
</x-app-layout>