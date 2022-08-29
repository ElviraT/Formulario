<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
use App\Models\Entrepreneur;
use App\Models\Entrepreneurship;
use App\Models\Direction;
use App\Models\State;
use Toastr;

use DB;

class Section1Controller extends Controller
{
	public function index(Request $request)
	{
		$estado=Collection::make(State::select(['id','nombre'])->orderBy('nombre')->get())->pluck("nombre", "id"); 

		return view('emprendedores.index')->with(compact('estado'));
	}
    public function add(Request $request)
    {
    	DB::beginTransaction();
    	try {
    		/*GUARDAR DATOS DE EMPRENDEDOR*/
            $data1= [
              'nombres' 		 => $request->nombres,
		      'apellidos'		 => $request->apellidos,
		      'cedula' 			 => $request->cedula,
		      'fecha_nacimiento' => $request->fecha_nacimiento,
		      'correo' 			 => $request->correo,
		      'telefono' 		 => $request->telefono,
            ];

            $entrepreneur = new Entrepreneur($data1);
            $entrepreneur->save();

            /*GUARDAR DATOS DE EMPRENDIMIENTO*/
            $data2= [
              'id_emprendedor' 		 => $entrepreneur->id,
		      'tiene_emprendimiento' => $request->tiene_emprendimiento,
		      'nombre_emprendimiento'=> $request->nombre_emprendimiento,
		      'descripcion' 		 => $request->descripcion,
		      'sector_economico' 	 => $request->sector_economico,
		      'ubicacion' 		 	 => $request->ubicacion,
            ];
    		
    		$Entrepreneurship = new Entrepreneurship($data2);
            $Entrepreneurship->save();

            /*DIRECCION EMPRENDIMIENTO*/
            $data3= [
              'id_entrepreneurship' => $Entrepreneurship->id,
		      'id_state' 			=> $request->id_state,
		      'id_municipality'		=> $request->id_municipality,
		      'id_parish' 			=> $request->id_parish,
            ];

            $direction = new Direction($data3);
            $direction->save();

            Toastr::success("Registro Agregado Correctamente", '¡Bien!');
    		DB::commit();
    	} catch (\Throwable $th) {
    		Toastr::error('Ocurrió un error, por favor intente de nuevo', '¡Oops!');
    		DB::rollback();
    	}

    	return redirect()->route('inicio', $entrepreneur->id);
    }
}
