<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel') }}
        </h2>
    </x-slot>
    <livewire:formulario-editar-semestre :semestre="$semestre">
</x-app-layout>