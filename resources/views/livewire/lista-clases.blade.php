<div class="border border-gray-400 rounded shadow-md flex flex-col md:justify-center p-2 bg-white w-2/3 mx-auto my-2">
    <h1 class="text-2xl font-bold text-center">Clases del semestre</h1>
    <div class="w-full flex justify-between py-2 px-4 font-bold">
            <p>Clase</p>
            <p>Docente asignado</p>
    </div>
    @foreach ( $clases as $clase)
        <x-responsive-link :href="route('clases.show', $clase->id)">
            <p>{{$clase->nombre}}</p>
            <p>{{$clase->user->name}}</p>
        </x-responsive-link>
    @endforeach
</div>
