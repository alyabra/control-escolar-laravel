<div class="border border-gray-400 rounded shadow-md flex flex-col md:justify-center p-2 bg-white w-2/3 mx-auto my-2">
    <h1 class="text-2xl font-bold text-center">Lista de semestres</h1>
    <p class="w-full text-center">Elige el semestre</p>
    <div class="w-full flex justify-between py-2 px-4 font-bold">
            <p>Fecha de inicio</p>
    </div>
    @foreach ( $semestres as $semestre)
    <x-responsive-link :href="route('semestre.show', $semestre->id)"> 
        <p>{{$semestre->fecha_inicio}}</p>
    </x-responsive-link>
    @endforeach
</div>