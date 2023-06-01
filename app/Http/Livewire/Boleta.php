<?php

namespace App\Http\Livewire;

use App\Models\Clase;
use Livewire\Component;
use App\Models\Semestre;
use App\Models\Estudiante;

class Boleta extends Component
{
    public $calificaciones;
    public $i;
    public $longitud;
    public $estudiantes;

    public function render()
    {
        $this->calificaciones = Estudiante::where('user_id', auth()->user()->id)->get();
        $this->longitud=count($this->calificaciones);

        return view('livewire.boleta');
    }
}
