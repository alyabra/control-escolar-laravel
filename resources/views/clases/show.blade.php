<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de clase') }}
        </h2>
        <div class="flex gap-2">
            <h3>{{$clase->nombre}}</h3>
            @can('create', App\Models\Clase::class)
                <button class="place-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>    
                </button>
            @endcan
        </div>
        <div class="flex gap-2">
            <p>{{$clase->user->name}}</p>
            @can('create', App\Models\Clase::class)
                <button class="place-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>    
                </button>
            @endcan
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if(session()->has('mensaje'))
                    <p>ddd</p>
                    @else
                        <p>no mensaje</p>
                @endif
            

                <p>Lista de alumnos aqui</p>
                    <livewire:lista-estudiantes :clase="$clase">
            </div>
            
            @can('create', App\Models\Clase::class)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="text-2xl font-bold text-center my-10">Editar lista de alumnos</h1>
                        <div></div>
                        <div class="md:flex md:justify-center p-5">
                            <livewire:lista-alumnos :clase="$clase"/>
                        </div>
                    </div>
                </div>
            @endcan
        </div>
    </div>
</x-app-layout>