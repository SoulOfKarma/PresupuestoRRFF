<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_permiso_usuarios extends Model
{
    protected $fillable = [
        'run_usuario', 'permiso_usuario', 'estado_login'
    ];
}
