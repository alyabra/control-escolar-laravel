<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class EstudianteRenglon extends Component
{
    protected $listeners = ['calificacionRegistrada' => 'render'];
    public $estudiante;
    public $calificacion;
    public $username;

    protected $rules = [
        'calificacion' => 'required',
    ];
    public function mount($estudiante)
    {
        $this->username =$estudiante->user->name;
        // dd($clase);
        // dd($this->username);
    //    $this->estudiante = $estudiante;
    //    dd($estudiante);
    }

    public function render()
    {
        // $name=$this->estudiante->user->name;
        // dd($this->estudiante->user);
        return view('livewire.estudiante-renglon', [
        ]);
    }
}
