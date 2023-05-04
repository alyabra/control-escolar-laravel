<?php

namespace App\Http\Livewire;

use App\Models\Clase;
use App\Models\Estudiante;
use App\Models\User;
use Livewire\Component;

class ListaAlumnos extends Component
{
    public $nombre;
    public $alumno_id;
    public $alumno;
    public $clase;

    protected $rules = [
        'alumno' => 'required|string',
    ];

    public function mount(Clase $clase)
    {
        // dd($clase);
       $this->clase = $clase;
    }

    public function agregarAlumno()
    {
        $this->emit('componenteDosActualizado');
        $datos = $this->validate();
        $this->clase->estudiantes()->create([
            'estudiante_id' => $datos['alumno'],
            'regular' => 1,
        ]);
    }
    public function getNombre($id) 
    {
        return $id;
    }

    public function render()
    {
        $alumnos = User::where('rol', 3)->get();
        $estudiantes = Estudiante::where('clase_id', $this->clase->id)->get();
        return view('livewire.lista-alumnos', 
        [
            'alumnos' => $alumnos,
            'estudiantes' => $estudiantes
        ]);
    }
}
