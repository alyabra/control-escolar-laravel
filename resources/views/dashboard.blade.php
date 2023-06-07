<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel') }}
        </h2>
    </x-slot>

    @can('create', App\Models\Clase::class)
        <x-bloque-accion >
            <x-slot name="title">
                {{ __('Edición de clases y semestres') }}
            </x-slot>
             {{-- <x-responsive-link :href="route('clases.index')">
                {{ __('Editar clases') }}
             </x-responsive-link> --}}
             <x-responsive-link :href="route('semestre.create')">
                {{ __('Registrar nuevo semestre') }}
             </x-responsive-link>
            <x-responsive-link :href="route('semestre.index')">
               {{ __('Editar semestre') }}
            </x-responsive-link>
        </x-bloque-accion>

        <x-bloque-accion >
            <x-slot name="title">
                {{ __('Editar avisos') }}
            </x-slot>
             <x-responsive-link :href="route('avisos.index')">
                {{ __('Editar avisos') }}
             </x-responsive-link>
        </x-bloque-accion>
        
        <x-bloque-accion >
            <x-slot name="title">
                {{ __('Registro de ususarios') }}
            </x-slot>
             <x-responsive-link :href="route('register')">
                {{ __('Registrar administradores') }}
             </x-responsive-link>
        </x-bloque-accion>

    @endcan
    {{-- Vista de profesor --}}
    @can('editarCalificacion',  App\Models\Clase::class)
        <x-bloque-accion >
            <x-slot name="title">
                {{ __('Registra tareas o sube calificación') }}
            </x-slot>
            <x-responsive-link :href="route('semestre.index')">
                {{ __('Subir calificación') }}
             </x-responsive-link>
             <x-responsive-link :href="route('clases.tareas')">
                {{ __('Subir tareas') }}
             </x-responsive-link>
        </x-bloque-accion> 
    @endcan

    {{-- Vista de alumnos --}}

    @cannot('editarCalificacion', App\Models\Clase::class)
        <x-bloque-accion >
            <x-slot name="title">
                {{ __('Ver calificaciones y tareas') }}
            </x-slot>
            <x-responsive-link :href="route('cardex.index', auth()->user()->id)">
                {{ __('Ver tus calificaciones') }}
            </x-responsive-link>
            <x-responsive-link  :href="route('clases.tareas')">
                {{ __('Ver tareas') }}
            </x-responsive-link>
        </x-bloque-accion> 
    @endcannot


</x-app-layout>
