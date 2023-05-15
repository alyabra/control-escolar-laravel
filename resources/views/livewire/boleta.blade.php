<div>
    @foreach ($calificaciones as $calificacion )
        <div class="flex justify-between">
            <p>{{$calificacion->clase->nombre}}</p>
            <p>{{$calificacion->calificacionFinal}}</p>
        </div>
    @endforeach
</div>
