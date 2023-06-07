<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AvisoComponente extends Component
{
    public $aviso;

    public function render()
    {
        return view('livewire.aviso-componente');
    }
}
