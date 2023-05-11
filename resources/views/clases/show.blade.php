<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de clase') }}
        </h2>
        <h3>
            {{$clase->nombre}}
        </h3>
        <p>{{$clase->user->name}}</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if(session()->has('mensaje'))
                    <p>ddd</p>
                    {{-- <div class="">
                    {{ session('mensaje') }}
                    </div> --}}
                    @else
                        <p>no mensaje</p>
                @endif
            

                <p>Lista de alumnos aqui</p>
                    <livewire:lista-estudiantes :clase="$clase">
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-center my-10">Editar lista de alumnos</h1>
                    <div></div>
                    <div class="md:flex md:justify-center p-5">
                        <livewire:lista-alumnos :clase="$clase"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>