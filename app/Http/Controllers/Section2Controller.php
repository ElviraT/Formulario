<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use Toastr;

class Section2Controller extends Controller
{
    public function index($id)
    {
    	return view('formacion.index')->with(compact('id'));
    }

    public function add(Request $request)
    {
    	try{
    	$formation = new Formation($request->input());
        $formation->save();

        Toastr::success("Registro Agregado Correctamente", '¡Bien!');    		
    	return redirect()->route('figura-juridica', $formation->id_emprendedor);
    	} catch (\Throwable $th) {
    		Toastr::error('Ocurrió un error, por favor intente de nuevo', '¡Oops!');
            return redirect()->route('formacion', $formation->id_emprendedor);
    	}

    }
}
