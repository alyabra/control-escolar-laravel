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
    <div>
        <x-input-label for="year" :value="__('year')" />
        <x-text-input
        id="year" 
        class="block mt-1 w-full" 
        type="number" 
        wire:model="year" 
        :value="old('year')"
        {{-- placeholder="20" --}}
        />
        @error('year')
        <livewire:mostrar-alerta :message="$message"/>
       @enderror
         {{-- <input type="number" id="year" wire:mode="year" min="2015" max="2100">
        @error('year')
         <livewire:mostrar-alerta :message="$message"/>
        @enderror --}}
    </div> 

    <div>
        <x-input-label for="tipo_semestre" :value="__('Semestre par o impar')" />
        <select 
            wire:model="tipo_semestre" 
            id="tipo_semestre"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm px-4"
        >
            <option value="">-- Tipo de semestre --</option>
                <option value="impar">1</option>
                <option value="par">2</option>
        </select>
        @error('tipo_semestre')
         <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div> 

    <x-primary-button class="w-full justify-center">
        {{ __('Crear clase') }}
    </x-primary-button>

</form>