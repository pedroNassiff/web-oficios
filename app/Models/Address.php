<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "address";

    protected $fillable = [
        'localidad', 'calle', 'num_calle', 'depto_num','depto_letra',
    ];
}
