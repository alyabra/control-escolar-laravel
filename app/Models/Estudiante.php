<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = [
        'estudiante_id',
        'clase_id',
        'regular',
    ];

    public function user()
    {
        // dd($this->belongsTo(User::class), $this->belongsTo(User::class)->select(['name']));

        return $this->belongsTo(User::class)->select(['name']);
    }
}
// 
