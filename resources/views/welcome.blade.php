<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hola') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido al sistema administativa") }}
                </div>
                <div>
                    <p>Si eres administrativo podras registrar nuevas clases y administrarlas</p>
                    <p>Si eres un pofresor podras registrar calificaciones de tus alumnos y agregar tareas</p>
                    <p>Si eres estudiante podras revisar tu calificación y consultar tareas</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>