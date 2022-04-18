<?php

namespace App\Http\Controllers;

use App\Models\Licitaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LicitacionesController extends Controller
{
    public function GetLicitacion(){
        try {
            $response = Licitaciones::select('*')
            ->orderBy('id','asc')
            ->get();

            return $response;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }

    public function PostLicitacion(Request $request){
        try {
            Licitaciones::create($request->all());
            return true;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }

    public function PutLicitacion(Request $request){
        try {
            Licitaciones::where('id', $request->id)->update(['codLicitacion' => $request->codLicitacion,
            'desLicitacion' => $request->desLicitacion]);
            return true;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }
}
