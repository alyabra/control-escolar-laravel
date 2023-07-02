<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function index()
    {
        return view('calificaciones.index');
    }
}
