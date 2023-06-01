<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Semestres') }}
            </h2>
            @can('create', App\Models\Clase::class)
                <a href="{{route('semestre.create')}}"
                class="border border-gray-300 font-bold py-1 px-2 rounded-md bg-slate-200 hover:bg-slate-300"
            >{{ __('Registrar nuevo semestre') }}</a>
            @endcan
        </div>
    </x-slot>

    <livewire:lista-semestre>    
</x-app-layout>