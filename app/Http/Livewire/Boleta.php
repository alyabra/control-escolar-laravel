<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class Boleta extends Component
{
    public $calificaciones;
    public function render()
    {
        $this->calificaciones = Estudiante::where('user_id', auth()->user()->id)->select('clase_id', 'calificacionFinal')->get();
        // $this->calificaciones = Estudiante::where('user_id', auth()->user()->id)->get();
        
        // dd($this->calificaciones[1]->clase->nombre);
        return view('livewire.boleta');
    }
}
