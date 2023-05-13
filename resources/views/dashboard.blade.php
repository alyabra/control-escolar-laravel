<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @can('create', App\Models\Clase::class)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex flex-col text-center">
                        <div class="space-y-4">
                            <h2>Edición de clases</h2>
                                <p>Tu no puedes agrefar clases</p>
                            <x-responsive-nav-link class="border border-gray-300  font-bold  rounded-md p-4 " :href="route('clases.create')">
                                {{ __('Agregar clases') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link class="border border-gray-300  font-bold  rounded-md p-4" :href="route('clases.index')">
                                    {{ __('Editar clases') }}
                            </x-responsive-nav-link>
                        </div>
                        <div class="space-y-4">
                            <h2>Registro de ususarios</h2>
                            <x-responsive-nav-link class="border border-gray-300 font-bold rounded-md p-4" :href="route('login')">
                                {{ __('Registrar alumnos') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link class="border border-gray-300 font-bold rounded-md p-4" :href="route('login')">
                                {{ __('Registrar profesores') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link class="border border-gray-300 w-1/6 font-bold rounded-md p-4 " :href="route('login')">
                                {{ __('Registrar administradores') }}
                            </x-responsive-nav-link>
                        </div>
                        <div>
                            <h2>Pagos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    {{-- Vista de profesor --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-col text-center">
                    <div class="space-y-4">
                        <h2>Registra tareas o sube calificación</h2>
                        <x-responsive-nav-link class="border border-gray-300  font-bold  rounded-md p-4 " :href="route('clases.index')">
                            {{ __('Subir calificación') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link class="border border-gray-300  font-bold  rounded-md p-4" :href="route('clases.tareas')">
                                {{ __('Subir tareas') }}
                        </x-responsive-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
