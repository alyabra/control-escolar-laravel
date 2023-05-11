<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clases') }}
            </h2>
            <a href="{{route('clases.create')}}"
                class="border border-gray-300 w-1/6 font-bold  rounded-md p-4 bg-slate-200 hover:bg-slate-300"
            >{{ __('Agregar clases') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-center my-10">Lista de clases activas</h1>
                    <div class="md:flex flex-col md:justify-center p-5">
                        <livewire:lista-clases />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>