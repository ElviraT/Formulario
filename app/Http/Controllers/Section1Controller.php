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
              'telefono'         => $request->telefono,
		      'codigo' 		     => '',
            ];

            $entrepreneur = new Entrepreneur($data1);
            $entrepreneur->save();
        
            $datos_codigo = [
                'fecha' => date('dmy'),
                'estado' => $request->estado,
                'municipio' => $request->municipio,
                'parroquia' => $request->parroquia,
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'id'        => $entrepreneur->id
            ];


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
            
            $this->_generar_codigo($datos_codigo);

            Toastr::success("Registro Agregado Correctamente", '¡Bien!');
    		DB::commit();
            
            return redirect()->route('formacion', $entrepreneur->id);
    	} catch (\Throwable $th) {
    		Toastr::error('Ocurrió un error, por favor intente de nuevo', '¡Oops!');
    		DB::rollback();
            return redirect()->route('inicio');
    	}

    	
    }

    private function _generar_codigo($emprendedor)
    {
        $estado= substr($emprendedor['estado'],0,5);
        $municipio= substr($emprendedor['municipio'],0,5);
        $parroquia= substr($emprendedor['parroquia'],0,5);
        $nombres= substr($emprendedor['nombres'],0,2);
        $apellidos= substr($emprendedor['apellidos'],0,2);

        $codigo = strtoupper($emprendedor['fecha'].'-'.$estado.'-'.$municipio.'-'.$parroquia.'-'.$nombres.'-'.$apellidos.'-'.$emprendedor['id']);
       
       Entrepreneur::where('id', $emprendedor['id'])->update(['codigo'=> $codigo]);
    }
}
