<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentacionPresupuestos extends Model
{
    protected $fillable = [
        'idPresupuesto','desDocumento','nombreDocumento',
    ];
}
