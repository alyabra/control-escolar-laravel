<div>
    @foreach ($avisos as $aviso )
        <div class="border border-slate-500 p-2">
            <h3 class="bg-slate-200 uppercase font-bold">{{$aviso->titulo}}</h3>
            <div><p>{{$aviso->contenido}}</p></div>
            <p class="bg-slate-200">Fecha de publicación <span class="font-bold">12/06/2023</span></p>
        </div> 
    @endforeach
</div>