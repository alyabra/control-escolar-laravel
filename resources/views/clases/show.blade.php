<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
                <h2>Materia: <span class="font-bold">{{$clase->materia->nombre}}</span></h2>
                <p>Profesor asignado: <span class="font-bold">{{$clase->user->name}}</span></p>
            @can('create', App\Models\Clase::class)
            <a href="{{route('clases.edit', $clase->id)}}"
            class="border border-gray-300 font-bold py-1 px-2 rounded-md bg-slate-200 hover:bg-slate-300 flex gap-2"
            >{{ __('Editar') }}<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
            </svg> </a>
                
            @endcan
        </div>
    </x-slot>

    <livewire:lista-estudiantes :clase="$clase">

    @can('create', App\Models\Clase::class)
        <livewire:formulario-agregar-estudiante :clase="$clase" />
    @endcan
</x-app-layout>