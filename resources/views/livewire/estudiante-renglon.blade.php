<div class="flex flex-col justify-center md:flex-row md:justify-between bg-slate-200 rounded p-1 gap-1">
   <p class="text-center px-1 h-6">{{$username}}</p>

   <div class="flex justify-center gap-2 h-6 px-1">
      <p class="border border-gray-600 px-2 rounded-sm bg-white">
         {{$estudiante->calificacionFinal}}
      </p>
      @can('editarCalificacion', App\Models\Clase::class)
         @if(!$estudiante->calificacionFinal || $estudiante->id == $idEditando)
            <livewire:calificacion-input :estudiante="$estudiante" >
         @endif

         @if ($estudiante->calificacionFinal)
            <livewire:switch-edition-button
               :estudiante="$estudiante" :idEditando="$idEditando" 
            />
         @endif
      @endcan


      @can('create', App\Models\Clase::class)
         <livewire:boton-eliminar :dato="'eliminarEstudiante'" :ideliminar="$estudiante->id">
      @endcan  
   </div>
</div>

