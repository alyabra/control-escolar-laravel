<?php

namespace App\Http\Livewire;

use App\Models\Aviso;
use Livewire\Component;

class ListaAvisos extends Component
{
    protected $listeners = ['eliminarAviso' => 'eliminarAviso'];

    public function eliminarAviso(Aviso $aviso) {
        $aviso->delete();
        $this->render();
    }
    public function render()
    {
        $avisos = Aviso::orderBy('created_at', 'desc')->paginate(4);
        return view('livewire.lista-avisos', [
            'avisos' => $avisos
        ]);
    }
}
