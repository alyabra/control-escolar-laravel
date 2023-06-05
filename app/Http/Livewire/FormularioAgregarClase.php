<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Clase;
use Livewire\Component;
use App\Models\Semestre;

class FormularioAgregarClase extends Component
{
    public $asignatura;
    public $docente;
    public $semestreid;


    protected $rules = [
        'asignatura' => 'required|string',
        'docente' => 'required|string',
    ];

    public function crearClase() {
        // $ultimoSemestre = Semestre::latest('id')->first();
        $datos = $this->validate();
        $clase = Clase::create([
            'nombre' => $datos['asignatura'],
            'user_id' => $datos['docente'],
            'materia_id' => 1,
            'semestre_id' => $this->semestreid,
            'creditos' => 12,
        ]);
        return redirect()->route('semestre.show', $this->semestreid);
    }
    public function render()
    {
        $docentes = User::where('rol', 2)->get();
        return view('livewire.crear-clase', [
            'docentes' => $docentes
        ]);
    }

}
