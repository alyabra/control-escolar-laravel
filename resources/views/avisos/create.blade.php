<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel') }}
        </h2>
    </x-slot>


    <form method="POST" action="{{ route('avisos.store') }}"
        class="w-2/3 bg-white rounded shadow-xl mx-auto p-4 my-2"
    >
        @csrf

        <h2>Crear un nuevo aviso</h2>
        <div>
            <x-input-label for="titulo" :value="__('Titulo')" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>
        {{-- Contenido --}}

        <div>
            <x-input-label for="contenido" :value="__('Contenido')" />
            <textarea name="contenido" id="contenido" cols="30" rows="10"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-12"
            ></textarea>

            <x-input-error :messages="$errors->get('contenido')" class="mt-2" />
        </div> 

        <x-primary-button class="ml-4">
            {{ __('Guardar aviso') }}
        </x-primary-button>
        </div>
    </form>
</x-app-layout>
