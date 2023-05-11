<?php

namespace App\Http\Livewire;

use App\Models\Clase;
use Livewire\Component;

class ListaClases extends Component
{

    public function render()
    {
        $clases = Clase::all();
        return view('livewire.lista-clases', [
            'clases' => $clases
        ] );
    }
}
