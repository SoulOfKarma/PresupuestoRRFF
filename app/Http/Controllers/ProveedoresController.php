<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProveedoresController extends Controller
{
    public function GetProveedor(){
        try {
            $response = Proveedores::select('*')
            ->orderBy('id','asc')
            ->get();

            return $response;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }

    public function PostProveedor(Request $request){
        try {
            Proveedores::create($request->all());
            return true;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }

    public function PutProveedor(Request $request){
        try {
            Proveedores::where('id', $request->id)->update(['runProveedor' => $request->runProveedor,
            'desProveedor' => $request->desProveedor]);
            return true;
        } catch (\Throwable $th) {
            log::info($th);
            return false;
        }
    }
}
