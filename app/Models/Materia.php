<?php

namespace App\Models;

// use App\Models\Clase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materia extends Model
{
    use HasFactory;

    public function clases()
    {
        return $this->hasMany(Clase::class);
    }
}
