<?php

namespace App\Http\Controllers;

use App\Models\itemPresupuestarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ItemPresupuestariosController extends Controller
{
    public function GetItemPresupuestario(){
        try {
            $response = itemPresupuestarios::select('*')
            ->orderBy('id','asc')
            ->get();

            return $response;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }

    public function PostItemPresupuestario(Request $request){
        try {
            itemPresupuestarios::create($request->all());
            return true;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }

    public function PutItemPresupuestario(Request $request){
        try {
            itemPresupuestarios::where('id', $request->id)->update(['codItemPresupuestario' => $request->codItemPresupuestario,
            'tituloItemPresupuestario' => $request->tituloItemPresupuestario,'descripcionItemPresupuestario' => $request->descripcionItemPresupuestario]);
            return true;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }
}
