<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SwitchEditionButton extends Component
{
    public $estudiante;
    public $idEditando;
    public function render()
    {
        return view('livewire.switch-edition-button');
    }
}
