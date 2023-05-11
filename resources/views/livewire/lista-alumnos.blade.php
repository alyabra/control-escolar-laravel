<div>
    <form class="md:w-1/2 space-y-5" wire:submit.prevent='agregarAlumno'>
        <div>
            <x-input-label for="searched" :value="__('Nombre de la alumno')" />
            <x-text-input
                id="searched" 
                class="block mt-1 w-full" 
                type="text" 
                wire:model="searched" 
                {{-- :value="old('alumno')" --}}
                placeholder="nombre de la alumno"
                />
                {{-- @error('alumno')
                <livewire:mostrar-alerta :message="$message"/>
                @enderror --}}
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
