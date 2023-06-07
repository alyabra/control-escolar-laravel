<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido al sistema administativa') }}
        </h2>
    </x-slot>


    <div class="flex md:flex-row flex-col w-5/6 mx-auto gap-2">
        <livewire:lista-avisos>
        <div class="bg-white mx-auto w-full md:w-1/3 p-4 my-4 shadow-xl rounded flex flex-col gap-2">
            <h2 class="text-center bg-slate-400">Informacion escolar</h2>
            <div class="border border-slate-500 p-2">
                <ul>
                    <li>Plan de estudio</li>
                    <li>Mapa curricular</li>
                    <li>Proceso de titulacion</li>
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>