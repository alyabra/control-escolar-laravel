<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido al sistema administativa') }}
        </h2>
    </x-slot>


    <div class="bg-white mx-auto p-4 md:w-3/4 my-4 shadow-xl rounded">
        <p>Identificate para tener acceso al sitema</p>
        <p>Si eres administrativo podras registrar nuevas clases y administrarlas</p>
        <p>Si eres un pofresor podras registrar calificaciones de tus alumnos y agregar tareas</p>
        <p>Si eres estudiante podras revisar tu calificación y consultar tareas</p>
    </div>

    <div class="bg-white mx-auto p-4 md:w-3/4 my-4 shadow-xl rounded flex flex-col gap-2">
        <h2 class="text-center bg-slate-400">Avisos</h2>  
        <x-lista-avisos></x-lista-avisos>
  
    </div>

    <div class="bg-white mx-auto p-4 md:w-3/4 my-4 shadow-xl rounded flex flex-col gap-2">
        <h2 class="text-center bg-slate-400">Informacion escolar</h2>
        <div class="border border-slate-500 p-2">
            <ul>
                <li>Plan de estudio</li>
                <li>Mapa curricular</li>
                <li>Proceso de titulacion</li>
            </ul>
        </div>
    </div>
</x-app-layout>