<div>
    {{-- @foreach ($calificaciones as $calificacion )
        <div class="flex justify-between">
            <p>{{$calificacion->clase->nombre}}</p>
            <p>{{$calificacion->calificacionFinal}}</p>

        </div>
    @endforeach --}}

@for ($i = 0; $i < $longitud; $i++)
<p class="text-bold text-center w-full bg-slate-400" >{{$calificaciones[$i]->clase->year < ( $i>0 ? $calificaciones[$i-1]->clase->year : 3000 ) ? $calificaciones[$i]->clase->year : null }}</p>
<div class="flex justify-between">
    <p>{{$calificaciones[$i]->clase->nombre}}</p>
    <p>{{$calificaciones[$i]->calificacionFinal}}</p>
</div>
@endfor
</div>
