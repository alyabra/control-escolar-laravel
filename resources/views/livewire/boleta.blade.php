<div class="bg-white overflow-hidden shadow-md rounded-lg max-w-7xl mx-auto sm:px-6 lg:p-8 ">
    <div class="rounded border border-gray-300 shadow-md">
        @if ($calificaciones->count()>0)
            <h1 class="text-center">Historia académico de: <span class="font-bold">{{$calificaciones[0]->user->name}}</span></h1>
            @for ($i = 0; $i < $longitud; $i++)
                <p class="text-bold text-center w-full bg-slate-200 px-2" >{{$calificaciones[$i]->clase->year < ( $i>0 ? $calificaciones[$i-1]->clase->year : 3000 ) ? $calificaciones[$i]->clase->year : null }}</p>
                <p class="text-bold text-center w-full bg-slate-400 px-2" ><span class="font-bold">{{$calificaciones[$i]->clase->semestre->fecha_inicio == ( $i>0 ? $calificaciones[$i-1]->clase->semestre->fecha_inicio  : 0 ) ? null : $calificaciones[$i]->clase->semestre->fecha_inicio }}</span></p>

                @if ($i==0)
                    <div  class="flex justify-between px-2 bg-slate-300">
                        <p>Materia</p>
                        <p>Calificación</p>
                    </div>
                @endif
                <div class="flex justify-between px-2 {{$i % 2 == 0 ? 'bg-slate-100' : ''}}">
                    <p class="">{{$calificaciones[$i]->clase->materia->nombre}}</p>
                    <p class="w-10">{{$calificaciones[$i]->calificacionFinal}}</p>
                </div>
            @endfor
        @else
            <p>Aun no estas registrada en ninguna clase</p>            
        @endif

    </div>
</div>
