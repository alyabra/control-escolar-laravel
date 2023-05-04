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
            'profesor_id' => $datos['docente'],
            'creditos' => 12,
        ]);
        // Mensaje de confirmacion
        // session()->flash('mensaje', 'Nueva clase registrada, ahora puedes agregar los estudiantes');

        return redirect()->route('clases.index');

        // dd('creando');
    }
    public function render()
    {
        $docentes = User::where('rol', 2)->get();
        return view('livewire.crear-clase', [
            'docentes' => $docentes
        ]);
    }

}
