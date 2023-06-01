<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Semestre;

class ListaSemestre extends Component
{
    public $semestres;
    public function render()
    {
        $this->semestres = Semestre::all()->sortByDesc('fecha_inicio');
        return view('livewire.lista-semestre');
    }
}
