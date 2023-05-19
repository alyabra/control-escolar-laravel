<?php

namespace App\Models;

use App\Models\User;
use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clase extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'user_id',
        'creditos',
        'year',
        'tipo_semestre',
        'active',
    ];

    public function estudiantes()
    {
        // dd('antes del error');
        return $this->hasMany(Estudiante::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getNombre() 
    {
        return User::find($this->estudiante->estudiante_id)->name;
    }

}
