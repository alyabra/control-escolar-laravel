<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrimaryButton extends Component
{
    public $slot;
    public function render()
    {
        return view('livewire.primary-button');
    }
}
