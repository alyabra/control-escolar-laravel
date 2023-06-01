<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'clase_id',
        'regular',
        'calificacionFinal'
    ];


    public function user()
    {
        return $this->belongsTo(User::class)->select(['name']);

    }
    public function clase()
    {
        return $this->belongsTo(Clase::class);

    }

}
// 
