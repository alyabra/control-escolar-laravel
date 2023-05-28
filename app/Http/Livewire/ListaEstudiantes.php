<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class ListaEstudiantes extends Component
{

    protected $listeners = ['eliminarEstudiante' => 'eliminarEstudiante',
        'editarCalificacion' => 'editarCalificacion'
    ];
    public $clase;
    public $idEditando =null;
    // public $estudiantes;

    public function eliminarEstudiante(Estudiante $estudiante) {
        $estudiante->delete();
    }

    public function editarCalificacion($id) {
        if($this->idEditando === null) {
            $this->idEditando =$id;
        } else {
            $this->idEditando = null;
        }
        // dd($this->estudianteId);
    }
    

    public function render()
    {
        $estudiantes = Estudiante::where('clase_id', $this->clase->id)->get();
        return view('livewire.lista-estudiantes', [
            // 'estudiantes' => $this->estudiantes ,
            'estudiantes' => $estudiantes
        ]);
    }
}
