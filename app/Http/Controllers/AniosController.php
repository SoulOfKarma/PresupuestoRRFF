<?php

namespace App\Http\Controllers;

use App\Models\Anios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AniosController extends Controller
{
    public function GetAnio(){
        try {
            $response = Anios::select('*')
            ->orderBy('anio','desc')
            ->get();

            return $response;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }

    public function PostAnio(Request $request){
        try {
            Anios::create($request->all());
            return true;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }

    public function PutAnio(Request $request){
        try {
            Anios::where('id', $request->id)->update(['anio' => $request->anio]);
            return true;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }
}
