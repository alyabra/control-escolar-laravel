<form wire:submit.prevent='registrarCalificacion' class="flex">
    <input type="number" min="0" max="10"  wire:model="calificacion" id="calificacion"
    class="w-20 bg-slate-400 mx-2 p-1"
 >
 <x-primary-button class="justify-center h-full ">
    {{ __('Guardar') }}
</x-primary-button>
</form>

