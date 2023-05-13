<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @foreach ( $clases as $clase)
            <a href="{{ route('clases.show', $clase->id)}}">
                <div class="w-full rounded-sm bg-slate-100 hover:bg-slate-300 flex justify-between font-bold border bordor-slate-900 my-1 p-2">
                    <div class="w-2/3 flex gap-3 justify-between">
                        <p>{{$clase->nombre}}</p>
                        <p>{{$clase->user->name}}</p>
                    </div> 
                </div>
            </a>
    @endforeach
</div>
