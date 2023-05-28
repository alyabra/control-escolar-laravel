<div class="bg-white border border-gray-300 w-full md:w-2/3 mx-auto p-4 my-2 rounded shadow gap-1 flex flex-col">
    @if($estudiantes->count()>0)
        @foreach ($estudiantes as $estudiante)
            <livewire:estudiante-renglon :estudiante="$estudiante" wire:key="{{$estudiante->id}}" :idEditando="$idEditando"/>
        @endforeach
    @else 
        <p class="text-center">No hay alumnos registrados en esta clase aun</p>
    @endif
</div>
