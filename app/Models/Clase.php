<?php

namespace App\Models;

use App\Models\User;
use App\Models\Semestre;
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
        'active',
        'semestre_id'
    ];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }

    public function getNombre() 
    {
        return User::find($this->estudiante->estudiante_id)->name;
    }

}
