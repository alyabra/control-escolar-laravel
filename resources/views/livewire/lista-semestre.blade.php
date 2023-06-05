<div class="border border-gray-400 rounded shadow-md flex flex-col md:justify-center p-2 bg-white w-2/3 mx-auto my-2">
    <h1 class="text-2xl font-bold text-center">Lista de semestres</h1>
    <p class="w-full text-center">Elige el semestre para ver, agregar o editar las clases</p>
    {{-- <div class="w-full flex justify-between py-2 px-4 font-bold">
            <p>Fecha de inicio</p>
    </div> --}}
    @if($semestres->count()>0)
        @foreach ( $semestres as $semestre)
            <x-responsive-link :href="route('semestre.show', $semestre->id)" class="font-normal	"> 
                <div class="w-full flex justify-between">
                    <p>Inicio: <span class="font-bold">{{$semestre->fecha_inicio}}</span></p>
                    <p>Fin: <span class="font-bold">{{$semestre->fecha_fin}}</span></p>
                </div>
            </x-responsive-link>
        @endforeach
    @else
    <div class="w-full flex justify-between">
        <p>Inicio: <span class="font-bold">Aun no hay semestre registrados, registra semestres y se veran aquí</span></p>
    </div>
    @endif
</div>