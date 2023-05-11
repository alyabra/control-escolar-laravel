<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Clase;
use Livewire\Component;
use App\Models\Estudiante;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Database\QueryException;

class ListaAlumnos extends Component
{
    public $nombre;
    public $alumno_id;
    public $alumno;
    public $searched ='';
    public $clase;
    // public $calificacionFinal;

    protected $rules = [
        'alumno' => 'required|string',
        // 'calificacionFinal' => 'nullable|numeric'
    ];

    public function mount(Clase $clase)
    {
        // dd($clase);
       $this->clase = $clase;
    }

    public function agregarAlumno()
    {
        $datos = $this->validate();
        try {
            $this->clase->estudiantes()->create([
                'user_id' => $datos['alumno'],
                'regular' => 1,
            ]);
            return redirect()->route('clases.show', $this->clase->id);
        } catch (QueryException $e) {
            if($e->getCode() == 23000) {
                // dd('error 23000');
                // return back()->withErrors('La combinación de clade_id y user_id ya existe.');
                session()->flash('registrosDuplicados', 'El estudiante ya estaba registrado');

            }
            
        }
        
        // TODO: hacer un mensaje flash
    }

    public function render()
    {
        // $alumnos = User::where('rol', 3)->get();
        $alumnos = User::where('rol', 3)->when($this->searched, function($query) {
            $query->where('name', 'LIKE', "%".$this->searched."%");
        })->get();
        // $vacantes = Vacante::when($this->termino, function($query) {
        //     $query->where('titulo', 'LIKE', "%".$this->termino."%");
        return view('livewire.lista-alumnos', 
        [
            'alumnos' => $alumnos
        ]);
    }
}
