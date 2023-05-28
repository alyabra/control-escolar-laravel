<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido al sistema administativa') }}
        </h2>
    </x-slot>


    <div class="bg-white mx-auto p-4 md:w-3/4 my-4 shadow-xl rounded">
        <p>Identificate para tener acceso al sitema</p>
        <p>Si eres administrativo podras registrar nuevas clases y administrarlas</p>
        <p>Si eres un pofresor podras registrar calificaciones de tus alumnos y agregar tareas</p>
        <p>Si eres estudiante podras revisar tu calificación y consultar tareas</p>
    </div>

    <div class="bg-white mx-auto p-4 md:w-3/4 my-4 shadow-xl rounded flex flex-col gap-2">
        <h2 class="text-center bg-slate-400">Avisos</h2>
        <div class="border border-slate-500 p-2">
            <h3 class="bg-slate-200 uppercase font-bold">Titulo del aviso 1 </h3>
            <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus aperiam labore earum, quibusdam odio asperiores rem nihil vitae totam doloribus. Praesentium nisi eum autem ipsam, repudiandae consectetur error ipsum corporis.</div>
            <p class="bg-slate-200">Fecha de publicación <span class="font-bold">12/06/2023</span></p>
        </div> 
        <div class="border border-slate-500">
            <h3>Titulo del aviso 2 </h3>
            <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus aperiam labore earum, quibusdam odio asperiores rem nihil vitae totam doloribus. Praesentium nisi eum autem ipsam, repudiandae consectetur error ipsum corporis.</div>
            <p>Fecha de publicación <span class="font-bold">12/06/2023</span></p>
        </div>
        <div class="border border-slate-500">
            <h3>Titulo del aviso 3</h3>
            <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus aperiam labore earum, quibusdam odio asperiores rem nihil vitae totam doloribus. Praesentium nisi eum autem ipsam, repudiandae consectetur error ipsum corporis.</div>
            <p>Fecha de publicación <span class="font-bold">12/06/2023</span></p>
        </div>      
    </div>

    <div class="bg-white mx-auto p-4 md:w-3/4 my-4 shadow-xl rounded flex flex-col gap-2">
        <h2 class="text-center bg-slate-400">Informacion escolar</h2>
        <div class="border border-slate-500 p-2">
            <ul>
                <li>Plan de estudio</li>
                <li>Mapa curricular</li>
                <li>Proceso de titulacion</li>
            </ul>
        </div>
    </div>

</x-app-layout>