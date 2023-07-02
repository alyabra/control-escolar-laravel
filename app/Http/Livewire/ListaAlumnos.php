<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ListaAlumnos extends Component
{
    public $nombre;
    public $alumno_id;
    public $alumno;
    public $searched ='';

    protected $rules = [
        'alumno' => 'required|string',
    ];

    public function verBoleta() {
        $datos = $this->validate();
        // dd($datos["alumno"]);
        return redirect()->route('cardex.index', $datos["alumno"]);
    }

    public function render()
    {
        $alumnos = User::where('rol', 3)->when($this->searched, function($query) {
            $query->where('name', 'LIKE', "%".$this->searched."%");
        })->get();

        
        return view('livewire.lista-alumnos', 
        [
            'alumnos' => $alumnos
        ]);
    }
}


