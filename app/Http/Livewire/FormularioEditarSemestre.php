<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Semestre;

class FormularioEditarSemestre extends Component
{
    // public $semestre;
    public $semestre_id;
    public $fecha_inicio;
    public $fecha_fin;

    protected $rules = [
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required',
    ];
    public function editarSemestre() 
    {
        $datos = $this->validate();
        // Encontrar la vacante a editar
        $semestre = Semestre::find($this->semestre_id);
        // Asignar los valores
        $semestre->fecha_inicio = $datos['fecha_inicio'];
        $semestre->fecha_fin = $datos['fecha_fin'];
        // Guardar la vacante
        $semestre->save();
        // redireccionar
        // session()->flash('mensaje', 'La vacante se actualizó correctamente');
        return redirect()->route('semestre.index');
    }

    public function mount(Semestre $semestre)
    {
        $this->semestre_id = $semestre->id;
        $this->fecha_inicio = $semestre->fecha_inicio;
        $this->fecha_fin = $semestre->fecha_fin;
    }
    public function render()
    {
        return view('livewire.formulario-editar-semestre');
    }
}
