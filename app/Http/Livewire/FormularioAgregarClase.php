<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Clase;
use App\Models\Materia;
use Livewire\Component;

class FormularioAgregarClase extends Component
{
    public $asignatura;
    public $docente;
    public $materia;
    public $semestreid;

    protected $rules = [
        'asignatura' => 'nullable',
        'docente' => 'required',
        'materia' => 'required',
    ];

    public function crearClase() {
        $datos = $this->validate();
        Clase::create([
            'user_id' => $datos['docente'],
            'materia_id' => $datos['materia'],
            'semestre_id' => $this->semestreid,
        ]);
        return redirect()->route('semestre.show', $this->semestreid);
    }
    public function render()
    {
        $materias = Materia::all();
        $docentes = User::where('rol', 2)->get();
        return view('livewire.formulario-agregar-clase', [
            'docentes' => $docentes,
            'materias' => $materias
        ]);
    }

}
