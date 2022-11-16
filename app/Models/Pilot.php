<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
       // 'fecha_nacimiento',
        'numero_licencia',
        'victorias',
        'escuderia_id'
    ];
}
