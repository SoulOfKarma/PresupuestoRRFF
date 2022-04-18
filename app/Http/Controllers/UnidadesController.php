<?php

namespace App\Http\Controllers;

use App\Models\Unidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UnidadesController extends Controller
{
    public function GetUnidades(){
        try {
            $response = Unidades::select('*')
            ->orderBy('id','asc')
            ->get();

            return $response;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }
}
