<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Historial academico') }}
        </h2>
    </x-slot>
    <div class="py-6">
                <livewire:boleta :idEstudiante="$idEstudiante" />
    </div>
</x-app-layout>