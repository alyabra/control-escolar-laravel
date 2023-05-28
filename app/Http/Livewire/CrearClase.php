<?php

namespace App\Http\Livewire;

use App\Models\Clase;
use App\Models\User;
use Livewire\Component;

class CrearClase extends Component
{
    public $asignatura;
    public $docente;
    public $year;
    public $tipo_semestre;


    protected $rules = [
        'asignatura' => 'required|string',
        'docente' => 'required|string',
        'year'=> 'required',
        'tipo_semestre' => 'required',
    ];

    public function crearClase() {
        $datos = $this->validate();
        $clase = Clase::create([
            'nombre' => $datos['asignatura'],
            'user_id' => $datos['docente'],
            'year' => intval($datos['year']),
            'tipo_semestre'  => intval($datos['tipo_semestre']),
            'creditos' => 12,
            'active' => 1,
        ]);
        return redirect()->route('clases.show', $clase->id);
    }
    public function render()
    {
        $docentes = User::where('rol', 2)->get();
        return view('livewire.crear-clase', [
            'docentes' => $docentes
        ]);
    }

}
