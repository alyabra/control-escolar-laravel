<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Semestre;

class ListaSemestre extends Component
{
    // public $semestres;

    public function render()
    {
        $semestres = Semestre::orderBy('fecha_inicio', 'desc')->paginate(4);
        return view('livewire.lista-semestre', 
    ['semestres' => $semestres ]);
    }
    public function eliminarSemestre(Semestre $semestre) {
        $semestre->delete();

    }
}
