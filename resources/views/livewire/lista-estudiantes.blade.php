<div class="bg-white border border-gray-300 p-4">
    @if($estudiantes->count()>0)
        @foreach ($estudiantes as $estudiante)
            <livewire:estudiante-renglon :estudiante="$estudiante" wire:key="{{$estudiante}}"/>
        @endforeach
    @else 
        <p class="text-center">No hay alumnos registrados en esta clase aun</p>
    @endif
</div>
