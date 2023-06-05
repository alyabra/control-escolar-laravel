<?php

namespace App\Http\Controllers;

use App\Models\Aviso;
use Illuminate\Http\Request;

class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('avisos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('avisos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string|max:255',

        ]);
        Aviso::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
        ]);
        return redirect('/avisos');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $aviso->delete();
    }
}
