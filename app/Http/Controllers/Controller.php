<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Municipality;
use App\Models\Parish;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function municipio(Request $request){
      $id = empty($request->input('estado')) ? 0 : $request->input('estado');
      $municipios = [];

      if ($id > 0) {
        $municipios = Municipality::where('id_state', $id)
                        ->orderBy('nombre')->get(); 
      }
        return response()->json($municipios);
    }

    public function parroquia(Request $request){
      $id = empty($request->input('municipio')) ? 0 : $request->input('municipio');
      $parroquias = [];

      if ($id > 0) {
        $parroquias = Parish::where('id_municipality', $id)
                        ->orderBy('nombre')->get(); 
      }
        return response()->json($parroquias);
    }
}
