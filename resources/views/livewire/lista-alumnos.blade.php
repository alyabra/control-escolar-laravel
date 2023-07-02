<form class="space-y-5" wire:submit.prevent='verBoleta'>
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
    {{-- @if(session()->has('registrosDuplicados'))
        <div class="border border-red-500 bg-red-100 text-red-700 font-bold uppercase p-2 mt-2 text-xs">
            {{ session('registrosDuplicados') }}
        </div>
    @endif --}}
</form>
