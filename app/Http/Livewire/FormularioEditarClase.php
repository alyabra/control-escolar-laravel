<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Clase;
use App\Models\Materia;
use Livewire\Component;

class FormularioEditarClase extends Component
{
    public $asignatura;
    public $docente;
    public $materia;
    public $clase;

    protected $rules = [
        'asignatura' => 'nullable',
        'docente' => 'required',
        'materia' => 'required',
    ];
    public function editarClase() {
        $datos = $this->validate();
        $clase = Clase::find($this->clase->id);
        $clase->user_id = $datos['docente'];
        $clase->materia_id = $datos['materia'];
        $clase->save();
        return redirect()->route('clases.show', $clase->id);
    }
    public function mount(Clase $clase)
    {
        $this->docente = $clase->user_id;
        $this->materia = $clase->materia_id;
    }
    public function render()
    {
        $materias = Materia::all();
        $docentes = User::where('rol', 2)->get();
        return view('livewire.formulario-editar-clase', [
            'docentes' => $docentes,
            'materias' => $materias
        ]);
    }
}
