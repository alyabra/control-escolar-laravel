<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sistema integral de acceso a la información') }}
        </h2>
    </x-slot>

    <div class="flex md:flex-row flex-col md:w-5/6 mx-auto p-2 w-full gap-2">
        <livewire:lista-avisos>
        <livewire:lista-documentos-descargables>
    </div>

</x-app-layout>