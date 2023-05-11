<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class CalificacionInput extends Component
{
    public $calificacion;
    public $estudiante;

    protected $rules = [
        'calificacion' => 'required',
    ];

    public function registrarCalificacion()
    {   
        $datos=$this->validate();
        $estudiante=Estudiante::find($this->estudiante->id);
        $estudiante['calificacionFinal']=$datos['calificacion'];
        $estudiante->save();
        $this->emit('calificacionRegistrada');
    }
    public function render()
    {
        return view('livewire.calificacion-input');
    }
}

