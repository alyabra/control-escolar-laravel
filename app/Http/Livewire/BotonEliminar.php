<?php

namespace App\Http\Livewire;

use App\Models\Aviso;
use Livewire\Component;
use App\Models\Semestre;

class BotonEliminar extends Component
{
    public $ideliminar;
    public $dato;
    protected $listeners = ['eliminarSemestre' => 'eliminarSemestre'];
    
    public function eliminarSemestre(Semestre $semestre) {
        $semestre->delete();
        redirect('/semestres');
    }

    public function render()
    {
        return view('livewire.boton-eliminar');
    }
}
