<?php

namespace App\Http\Controllers;

use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('semestres.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('semestres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);
        Semestre::create([
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);
        return redirect('/semestres');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semestre $semestre)
    {
        // dd($semestre->clases);
        return view('semestres.show', [
            'semestre' => $semestre
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semestre $semestre)
    {
        
        return view('semestres.edit', [
            'semestre' => $semestre
        ]);
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
        //
    }
}
