<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @foreach ( $clases as $clase)
        <div class="w-full rounded-sm">
            <a href="{{ route('clases.show', $clase->id)}}">
                <div>
                    <p>{{$clase->nombre}}</p>
                    <p>ss</p>
                    <p>{{$clase->docente}}</p>
                </div>
            </a> 
        </div>
    @endforeach
</div>
