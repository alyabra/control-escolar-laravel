<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clases') }}
            </h2>
            @can('create', App\Models\Clase::class)
                <a href="{{route('clases.create')}}"
                class="border border-gray-300 font-bold py-1 px-2 rounded-md bg-slate-200 hover:bg-slate-300"
            >{{ __('Agregar clases') }}</a>
            @endcan
        </div>
    </x-slot>

    <livewire:lista-clases />    

</x-app-layout>