<?php

namespace App\Http\Livewire;

use App\Models\Clase;
use Livewire\Component;

class ListaClases extends Component
{
    public function render()
    {
        // $clases = Clase::all();
        if (auth()->user()->rol ===1 ) {
           $clases = Clase::all();
        } else {
            $clases = Clase::where('user_id', auth()->user()->id)->get();
        }
        return view('livewire.lista-clases', [
            'clases' => $clases
        ] );
    }
}
