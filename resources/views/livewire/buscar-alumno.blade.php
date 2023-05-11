<div>
    <div>
        <x-input-label for="asignatura" :value="__('Nombre de la asignatura')" />
        <x-text-input
            id="asignatura" 
            class="block mt-1 w-full" 
            type="text" 
            {{-- wire:model="asignatura"  --}}
            :value="old('asignatura')"
            placeholder="nombre de la asignatura"
            />
            @error('asignatura')
            <livewire:mostrar-alerta :message="$message"/>
           @enderror
    </div> 
    <div wire:ignore>
        <select 
        {{-- wire:model="alumno"  --}}
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
    </div>
    <label for="">Sea seleccionado: {{$seleccionado}}</label>

</div>
