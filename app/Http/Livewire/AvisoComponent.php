<?php

namespace App\Http\Livewire;

use App\Models\Aviso;
use Livewire\Component;

class AvisoComponent extends Component
{
    public $aviso;
    protected $listeners = ['eliminarAviso' => 'eliminarAviso'];

    public function eliminarAviso(Aviso $aviso) {
        $aviso->delete();
        // redirect('/avisos');
    }

    public function render()
    {
        return view('livewire.aviso-componente');
    }
}
