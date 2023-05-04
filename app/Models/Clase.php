<?php

namespace App\Models;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clase extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'profesor_id',
        'creditos',
    ];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    public function docente()
    {
        // dd($this->belongsTo(User::class), $this->belongsTo(User::class)->select(['name']));

        return $this->hasOne(User::class);
    }

    public function getNombre() 
    {
        return User::find($this->estudiante->estudiante_id)->name;
    }

}
