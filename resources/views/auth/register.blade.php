<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Registrar a nuevos usuarios') }}
            </h2>
        </div>
    </x-slot>

    <form method="POST" action="{{ route('register') }}" class="md:w-1/2 mx-auto bg-white p-6 m-2 rounded shadow-md ">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        {{-- Matricula o numero de empleado --}}
        <div>
            <x-input-label for="enrollment" :value="__('Matricula o número de empleado')" />
            <x-text-input id="enrollment" class="block mt-1 w-full" type="text" name="enrollment" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('enrollment')" class="mt-2" />
        </div>
        {{-- ROL --}}
        <div class="mt-4">
            <x-input-label for="rol" :value="__('Tipo de cuenta')" />
            <select name="rol" id="rol"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
            >
            <option value="">-- Selecciona un rol --</option>
            <option value="1">Administrador</option>
            <option value="2">Profesor</option>
            <option value="3">Estudiante</option>

            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> --}}

            <x-primary-button class="">
                {{ __('Registrar usuario') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
