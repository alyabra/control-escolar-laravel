{{-- Para usar este componente se necesita el id del dato y ademas el nombre del evento que se va emitir el cual recibe el id --}}
<button class=" place-content-center h-full"
wire:click="$emit('alertar', {{$ideliminar}}, '{{$dato}}')"
>
<svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-full">
   <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
</svg>
</button>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
   Livewire.on('alertar', (id, eliminarDato) => {
      // alert(id)
       Swal.fire({
       title: 'Eliminar',
       text: `Una ${eliminarDato} eliminada no se puede recuperar`,
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Si eliminar',
       cancelButtonText: 'Cancelar'
       }).then((result) => {
       if (result.isConfirmed) {
           Livewire.emit(eliminarDato, id)
           Swal.fire(
           `Se elimino la ${eliminarDato}`,
           'Eliminado correctamente',
           'success'
           )
       }
   })
   })
   </script>
@endpush