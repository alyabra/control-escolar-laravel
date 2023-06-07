<div class="bg-white mx-auto p-4 w-full md:w-3/4 my-4 shadow-xl rounded flex flex-col gap-2">
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
                {{$avisos->links()}}
</div>