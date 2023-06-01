<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel') }}
        </h2>
    </x-slot>


    <form method="POST" action="{{ route('semestre.store') }}"
        class="w-2/3 bg-white rounded shadow-xl mx-auto p-4 my-2"
    >
        @csrf

        <h2>Comienza un nuevo semestre</h2>
        <div>
            <input type="date" name="fecha_inicio" id="fecha_inicio">
            <x-input-error :messages="$errors->get('fecha_inicio')" class="mt-2" />
        </div> 
        <div>
            <input type="date" name="fecha_fin" id="fecha_fin">
            <x-input-error :messages="$errors->get('fecha_fin')" class="mt-2" />
        </div> 

        <x-primary-button class="ml-4">
            {{ __('Registrar semestre') }}
        </x-primary-button>
        </div>
    </form>
</x-app-layout>