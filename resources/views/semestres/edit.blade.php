<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel') }}
        </h2>
    </x-slot>


    <form method="POST" action="{{ route('semestre.store') }}"
        class="max-width-20 md:w-2/5 bg-white rounded-2xl shadow-xl mx-auto my-2 flex flex-col justify-center text-xl gap-4 p-8 border border-slate-200"
    >
        @csrf

        <h2 class="font-bold">Editar las fechas de inicio y fin del semestre</h2>
        <div class="flex flex-col justify-center">
            <x-input-label for="fecha_inicio" :value="__('Fecha de inicio')" 
                class="w-50 text-xl"
            />
            <input type="date" name="fecha_inicio" id="fecha_inicio"
                class="text-xl"
                :value="old('fecha_inicio')"
            >
            <x-input-error :messages="$errors->get('fecha_inicio')" class="mt-2" />
        </div> 
        <div class="flex flex-col justify-center">
            <x-input-label for="fecha_fin" :value="__('Fecha de termino')" 
                class="text-xl"
            />
            <input type="date" name="fecha_fin" id="fecha_fin"
                class="text-xl"
            >
            <x-input-error :messages="$errors->get('fecha_fin')" class="mt-2" />
        </div> 
        <x-primary-button >
            {{ __('Guardar cambios') }}
        </x-primary-button>
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('dashboard') }}">
            {{ __('Volver al panel de control') }}
        </a>
        </div>
    </form>

</x-app-layout>