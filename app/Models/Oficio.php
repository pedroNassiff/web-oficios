<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficio extends Model
{
    protected $table = "oficio";

    protected $fillable = [
        'id', 'nombre'
    ];

    public function especialidad()
    {
        return $this->hasMany('App\Models\Especialidad');
    }
}
