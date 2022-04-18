<?php

namespace App\Http\Controllers;

use App\Models\TipoServicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TipoServiciosController extends Controller
{
    public function GetTipoServicio(){
        try {
            $response = TipoServicios::select('*')
            ->orderBy('id','asc')
            ->get();

            return $response;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }
}
