<div class="border-2 border-slate-500 p-2 rounded">
    <div>
        <h3 class="bg-slate-200 uppercase font-bold">{{$aviso->titulo}}</h3>
        <p>{{$aviso->contenido}}</p>
        <p class="bg-slate-200"> Fecha de publicación: <span class="font-bold">{{$aviso->created_at}}</span></p>
    </div>
    @can('create', App\Models\Clase::class)
    <div class="flex justify-center pt-2">
        <livewire:boton-eliminar :dato="'eliminarAviso'" :ideliminar="$aviso->id">
    </div>
    @endcan
</div>