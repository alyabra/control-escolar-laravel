<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EstudianteRenglon extends Component
{
    public $estudiante;
    public function getNombre() 
    {
        return User::find($this->estudiante->estudiante_id)->name;
    }

    public function render()
    {
        $nombre = $this->getNombre();
        return view('livewire.estudiante-renglon', [
            'nombre' => $nombre
        ]);
    }
}
