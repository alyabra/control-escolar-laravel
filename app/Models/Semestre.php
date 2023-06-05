<?php

namespace App\Models;

use App\Models\Clase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semestre extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_inicio',
        'fecha_fin'
    ];

    public function clases()
    {
        return $this->hasMany(Clase::class);
    }
}
