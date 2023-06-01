<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Clase;
use Livewire\Component;
use App\Models\Semestre;

class CrearClase extends Component
{
    public $asignatura;
    public $docente;


    protected $rules = [
        'asignatura' => 'required|string',
        'docente' => 'required|string',
    ];

    public function crearClase() {
        $ultimoSemestre = Semestre::latest('id')->first();
        $datos = $this->validate();
        $clase = Clase::create([
            'nombre' => $datos['asignatura'],
            'user_id' => $datos['docente'],
            'semestre_id' => $ultimoSemestre->id,
            'creditos' => 12,
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
