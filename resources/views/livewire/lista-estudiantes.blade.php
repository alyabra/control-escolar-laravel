<div class=" bg-white border border-gray-300 p-4">
    @foreach ($estudiantes as $estudiante )
        {{-- <p>{{$estudiante->id}}</p> --}}
        <livewire:estudiante-renglon :estudiante="$estudiante"/>
    @endforeach
</div>
