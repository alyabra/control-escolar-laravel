<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class BuscarAlumno extends Component
{
    public $seleccionado = '';
    public $alumnos;

    public function mount() {
        $this->alumnos = [];
    }
    public function render()
    {
        $this->alumnos = User::where('rol', 3)->get();
        return view('livewire.buscar-alumno');
    }
}
