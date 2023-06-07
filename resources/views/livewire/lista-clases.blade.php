<div class="border border-gray-400 rounded shadow-md flex flex-col md:justify-center p-2 bg-white w-2/3 mx-auto my-2">
    <h1 class="text-2xl font-bold text-center">Clases del semestre</h1>
    <div class="w-full flex justify-between py-2 px-4 font-bold">
            <p>Clase</p>
            <p>Docente asignado</p>
    </div>
    @if ($clases->count()>0)
        @foreach ( $clases as $clase)
            <x-responsive-link :href="route('clases.show', $clase->id)">
                <p>{{$clase->materia->nombre}}</p>
                <p>{{$clase->user->name}}</p>
            </x-responsive-link>
        @endforeach
    @else 
            <p class="text-center">Aun no hay clases registradas</p>
    @endif
</div>
