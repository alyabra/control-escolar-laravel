<?php

namespace App\Http\Livewire;

use App\Models\Clase;
use App\Models\User;
use Livewire\Component;

class CrearClase extends Component
{
    public $asignatura;
    public $docente;

    protected $rules = [
        'asignatura' => 'required|string',
        'docente' => 'required|string'
    ];

    public function crearClase() {
        $datos = $this->validate();
        Clase::create([
            'nombre' => $datos['asignatura'],
            'user_id' => $datos['docente'],
            'creditos' => 12,
        ]);
        // TODO: Crear mensaje flash de confirmacion
        return redirect()->route('clases.index');
    }
    public function render()
    {
        $docentes = User::where('rol', 2)->get();
        return view('livewire.crear-clase', [
            'docentes' => $docentes
        ]);
    }

}
