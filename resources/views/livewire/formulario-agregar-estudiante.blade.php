<div class="m-2 p-4 bg-white max-w-2xl mx-auto rounded-xl shadow text-center flex flex-col gap-2">
    <div class="p-6 text-gray-900">
        <h1 class="text-2xl font-bold text-center">Editar lista de estudiantes inscritos a esta clase</h1>
        <p>Busca el nombre del estudiante, si lo deseas puedes filtrar por nombre o por matricula</p>
        <div class="md:flex md:justify-center p-5">
    <form class="space-y-5" wire:submit.prevent='agregarAlumno'>
        <div class="flex w-full justify-between gap-4">
            <div>
                <x-input-label for="searched" :value="__('Filtrar por nombre')" />
                <x-text-input
                    id="searched" 
                    class="block mt-1 w-full" 
                    type="text" 
                    wire:model="searched" 
                    :value="old('alumno')"
                    placeholder="nombre de la alumno"
                    />
            </div> 
            <div>
                <x-input-label for="searchedMatricula" :value="__('Filtrar por matricula')" />
                <x-text-input
                    id="searchedMatricula" 
                    class="block mt-1 w-full" 
                    type="text" 
                    wire:model="searchedMatricula" 
                    placeholder="matricula"
                />
            </div> 
        </div>
        <x-input-label for="alumno" :value="__('alumno')" />
        <select 
            wire:model="alumno" 
            id="alumno"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        >
            <option value="">-- Seleccione --</option>
            @foreach ($alumnos as $alumno )
                <option value="{{ $alumno->id }}">{{$alumno->name}}</option>
            @endforeach
            @error('alumno')
            <livewire:mostrar-alerta :message="$message"/>
           @enderror
        </select>
        <x-primary-button class="w-full justify-center">
            {{ __('Agregar alumno') }}
        </x-primary-button>
        @if(session()->has('registrosDuplicados'))
            <div class="border border-red-500 bg-red-100 text-red-700 font-bold uppercase p-2 mt-2 text-xs">
                {{ session('registrosDuplicados') }}
            </div>
        @endif
    </form>
</div>
</div>
</div>
