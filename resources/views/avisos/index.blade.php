<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Avisos') }}
            </h2>
        </div>
    </x-slot>

    <livewire:lista-avisos /> 
    
    <livewire:formulario-agregar-aviso>

</x-app-layout>