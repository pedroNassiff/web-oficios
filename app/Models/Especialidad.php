<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = "especialidad";

    protected $fillable = [
        'id', 'oficio_id', 'nombre', 'descripcion'
    ];

    public function oficio()
    {
        return $this->belongsTo('App\Models\Oficio', 'oficio_id');
    }
}
