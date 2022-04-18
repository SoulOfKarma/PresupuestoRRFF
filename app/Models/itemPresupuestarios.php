<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class itemPresupuestarios extends Model
{
    protected $fillable = [
        'codItemPresupuestario','tituloItemPresupuestario','descripcionItemPresupuestario',
    ];
}
