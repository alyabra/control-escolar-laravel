<div class="">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @foreach ( $clases as $clase)
        <a href="{{ route('clases.show', $clase->id)}}">
            <div class="w-full rounded-sm bg-slate-100 hover:bg-slate-300 flex justify-around font-bold border bordor-slate-900 my-1 p-2">
                        <p>{{$clase->nombre}}</p>
                        <p>{{$clase->user->name}}</p>
            </div>
        </a> 
    @endforeach
</div>
