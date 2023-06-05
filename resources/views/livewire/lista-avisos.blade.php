<div class="bg-white mx-auto p-4 w-3/4 my-4 shadow-xl rounded flex flex-col gap-2">
    <h2 class="text-center bg-slate-400">Avisos</h2>  
            @if($avisos->count()>0)
                @foreach ($avisos as $aviso )
                    <livewire:aviso-componente :aviso="$aviso"
                     wire:key="{{$aviso->id}}" 
                    >
                @endforeach
            @else
                <p>Aun no hay avisos resgistrados</p>
            @endif
                <div class="bg-white mx-auto p-4 w-2/3 my-4 shadow-xl rounded flex flex-col gap-2">
                    <h2 class="text-center bg-slate-400">Informacion escolar</h2>
                    <div class="border border-slate-500 p-2">
                        <ul>
                            <li>Plan de estudio</li>
                            <li>Mapa curricular</li>
                            <li>Proceso de titulacion</li>
                        </ul>
                    </div>
                </div>            ç
                {{$avisos->links()}}
</div>