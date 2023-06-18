<?php

namespace App\Http\Livewire;

use App\Models\Aviso;
use App\Models\Clase;
use Livewire\Component;
use App\Models\Semestre;

class BotonEliminar extends Component
{
    public $ideliminar;
    public $dato;
    protected $listeners = ['eliminarSemestre' => 'eliminarSemestre',
        'eliminarClase' => 'eliminarClase'
    ];
    
    public function eliminarSemestre(Semestre $semestre) {
        $semestre->delete();
        redirect('/semestres');
    }
    public function eliminarClase(Clase $clase) {
        $idSemestre = $clase->semestre->id;
        // dd($idSemestre);
        $clase->delete();
        redirect()->route('semestre.show', $idSemestre)->with('message', 'Redirección exitosa');;
    }

    public function render()
    {
        return view('livewire.boton-eliminar');
    }
}
