<div>
    @for ($i = 0; $i < $longitud; $i++)
    <p class="text-bold text-center w-full bg-slate-400" >{{$calificaciones[$i]->clase->year < ( $i>0 ? $calificaciones[$i-1]->clase->year : 3000 ) ? $calificaciones[$i]->clase->year : null }}</p>
    {{-- <p>{{$calificaciones[$i]->clase->tipo_semestre}}</p> --}}
    <p class="text-bold text-center w-full bg-slate-200" >{{$calificaciones[$i]->clase->tipo_semestre == ( $i>0 ? $calificaciones[$i-1]->clase->tipo_semestre  : 0 ) ? null : $calificaciones[$i]->clase->tipo_semestre }}</p>
    <div class="flex justify-between">
        <p>{{$calificaciones[$i]->clase->nombre}}</p>
        <p>{{$calificaciones[$i]->calificacionFinal}}</p>
    </div>
    @endfor
</div>
