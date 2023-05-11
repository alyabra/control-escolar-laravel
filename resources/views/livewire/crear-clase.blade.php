<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearClase' >
    <div>
        <x-input-label for="asignatura" :value="__('Nombre de la asignatura')" />
        <x-text-input
            id="asignatura" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="asignatura" 
            :value="old('asignatura')"
            placeholder="nombre de la asignatura"
            />
            @error('asignatura')
            <livewire:mostrar-alerta :message="$message"/>
           @enderror
    </div> 
    <div>
        <x-input-label for="docente" :value="__('Docente')" />
        <select 
            wire:model="docente" 
            id="docente"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        >
            <option value="">-- Seleccione --</option>
            @foreach ($docentes as $docente )
                <option value="{{ $docente->id }}">{{$docente->name}}</option>
            @endforeach
        </select>
        @error('docente')
         <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div> 

    <x-primary-button class="w-full justify-center">
        {{ __('Crear vacante') }}
    </x-primary-button>

</form>