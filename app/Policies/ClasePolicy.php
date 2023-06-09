<?php

namespace App\Policies;

use App\Models\Clase;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ClasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Clase $clase): bool
    {
        $canI = ($user->id === $clase->user->id || $user->rol === 1);
        return $canI ;
    } 

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        return $user->rol === 1 ;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Clase $clase): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Clase $clase): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Clase $clase): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Clase $clase): bool
    {
        //
    }
    // Agregar alumno
    public function agregarEstudiante(User $user): bool
    {
        return $user->rol === 1 ;
    }
    // Eliminar estudiante
    public function editarCalificacion(User $user): bool
    {
        return $user->rol === 2 ;
    }
    public function verTusCalicaciones(User $user): bool
    {
        $canI = ($user->rol === 1 || $user->id === auth()->user()->id);
        return $canI ;
    }
}
