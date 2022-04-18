<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuestos extends Model
{
    protected $fillable = [
        'idUnidad','idLicitacion','idTipoServicio','idProveedor','iditemPresupuestario1','iditemPresupuestario2',
        'iditemPresupuestario3','fechaInicio','fechaTermino','ValEne','ValFeb','ValMar','ValAbr','ValMay',
        'ValJun','ValJul','ValAgo','ValSep','ValOct','ValNov','ValDic','id_anio',
        'ValPreventivo','ValCorrectivo',
    ];
}
