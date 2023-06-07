<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Avisos') }}
            </h2>
        </div>
    </x-slot>

    <livewire:formulario-agregar-aviso>
    <livewire:lista-avisos /> 

</x-app-layout>