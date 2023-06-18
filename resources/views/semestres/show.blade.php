<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <p>Fecha de inicio: <span class="font-bold">{{$semestre->fecha_inicio}}</span></p>          
            <p>Fecha final: <span class="font-bold">{{$semestre->fecha_fin}}</span></p>
            @can('create', App\Models\Clase::class)
            <div class="flex p-2 gap-2">
                <a href="{{route('semestre.edit', $semestre->id)}}" class="flex justify-around border border-slate-300 w-20 rounded bg-blue-300 hover:bg-blue-600 p-1"
                    >  Editar<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                       </svg>
                   </a>
                   {{-- <livewire:boton-eliminar :dato="'eliminarSemestre'" :ideliminar="$semestre->id"> --}}
            </div>
           @endcan
        </div>
        {{-- @can('create', App\models\Clase::class)
            <livewire:boton-eliminar :dato="'eliminarSemestre'" :ideliminar="$semestre->id">        
        @endcan --}}
    </x-slot>
    

        <livewire:lista-clases :semestre="$semestre">
    @can('create', App\Models\Clase::class)
        <livewire:formulario-agregar-clase :semestreid="$semestre->id">
    @endcan
</x-app-layout>