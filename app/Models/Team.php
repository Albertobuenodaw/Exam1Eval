<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'fecha_creacion',
        'num_pilotos',
        'sobre_presupuesto',
        'team_id'
    ];
}
