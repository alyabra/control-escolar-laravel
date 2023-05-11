<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class ListaEstudiantes extends Component
{
    protected $listeners = ['eliminarEstudiante' => 'eliminarEstudiante'];
    public $clase;
    // public $estudiantes;

    public function eliminarEstudiante(Estudiante $estudiante) {
        $estudiante->delete();
    }
    

    public function render()
    {
        // $this->estudiantes = Estudiante::where('clase_id', $this->clase->id)->get();
        $estudiantes = Estudiante::where('clase_id', $this->clase->id)->get();
        return view('livewire.lista-estudiantes', [
            // 'estudiantes' => $this->estudiantes ,
            'estudiantes' => $estudiantes ,
        ]);
    }
}
