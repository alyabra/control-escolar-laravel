<div class="border border-slate-500 p-2">
    <div>
        <h3 class="bg-slate-200 uppercase font-bold">{{$aviso->titulo}}</h3>
        <p>{{$aviso->contenido}}</p>
        <p class="bg-slate-200"> Fecha de publicación: <span class="font-bold">{{$aviso->created_at}}</span></p>
    </div>
    @can('create', App\Models\Clase::class)
        <livewire:boton-eliminar :dato="'eliminarAviso'" :ideliminar="$aviso->id">
    @endcan
</div>