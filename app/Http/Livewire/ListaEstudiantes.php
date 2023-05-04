<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Estudiante;

class ListaEstudiantes extends Component
{
    protected $listeners = ['componenteDosActualizado' => 'render'];
    public $clase;
    public function getNombre() 
    {
        return User::find($this->estudiante->estudiante_id)->name;
    }
    public function render()
    {
        $estudiantes = Estudiante::where('clase_id', $this->clase->id)->get();
        return view('livewire.lista-estudiantes', [
            'estudiantes' => $estudiantes ,
        ]);
    }
}
