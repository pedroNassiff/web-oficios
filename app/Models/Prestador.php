<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    protected $table = "prestador";

    protected $fillable = [
        'id', 'user_id', 'descripcion', 'dni', 'telefono', 'web', 'matricula', 'matriculado', 'habilitado'
    ];
    
}
