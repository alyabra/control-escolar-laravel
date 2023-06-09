<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class Boleta extends Component
{
    public $calificaciones;
    public $i;
    public $longitud;
    public $estudiantes;
    public $idEstudiante;

    public function render()
    {
        // $estudiante = User::find($this->idEstudiante);
        $this->calificaciones = Estudiante::where('user_id', $this->idEstudiante)->get();
        $this->longitud=count($this->calificaciones);

        return view('livewire.boleta');
    }
}
