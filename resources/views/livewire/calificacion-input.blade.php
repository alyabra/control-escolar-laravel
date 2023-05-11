<form wire:submit.prevent='registrarCalificacion'>
    <input type="number" min="0" max="10"  wire:model="calificacion" id="calificacion"
    class="w-20 bg-slate-400 mx-2 h-8 p-2"
 >
 <x-primary-button class="justify-center">
    {{ __('Guardar calificación') }}
</x-primary-button>
</form>

