<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BotonEliminar extends Component
{
    public $ideliminar;
    public $dato;

    public function render()
    {
        return view('livewire.boton-eliminar');
    }
}
