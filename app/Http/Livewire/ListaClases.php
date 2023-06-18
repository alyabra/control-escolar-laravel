<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListaClases extends Component
{
    public $semestre;
    public function render()
    {
        if (auth()->user()->rol ===1 ) {
            $clases =$this->semestre->clases;
        } else {
            $clases =$this->semestre->clases()->where('user_id', auth()->user()->id)->get();
        }
        return view('livewire.lista-clases', [
            'clases' => $clases,
        ] );
    }
}
