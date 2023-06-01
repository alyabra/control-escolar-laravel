<?php

namespace App\View\Components;

use App\Models\Aviso;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListaAvisos extends Component
{
    public $avisos; 
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->avisos=Aviso::all();
        return view('components.lista-avisos');
    }
}
