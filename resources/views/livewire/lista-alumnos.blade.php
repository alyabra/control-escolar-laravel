<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <form class="md:w-1/2 space-y-5" wire:submit.prevent='agregarAlumno' >
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
            @error('asignatura')
            <livewire:mostrar-alerta :message="$message"/>
           @enderror
        </select>
    
        <x-primary-button class="w-full justify-center">
            {{ __('Agregar alumno') }}
        </x-primary-button>
    
    </form>
</div>
