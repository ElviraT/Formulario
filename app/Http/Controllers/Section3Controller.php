<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
use Illuminate\Support\Facades\Storage;
use App\Models\Bank;
use App\Models\Average;
use App\Models\Entrepreneurship;
use App\Models\LegalData;
use App\Models\SocialNetworks;
use App\Models\Imagen;
use App\Models\EconomicData;
use App\Mail\ConfirmarRegistro;
use App\Models\Entrepreneur;

use Toastr;
use Image;
use Mail;
use DB;

class Section3Controller extends Controller
{
	const UPLOAD_PATH = 'documentos';
    public function index($id)
	{
		$banco=Collection::make(Bank::select(['id', DB::raw('CONCAT(codigo, " - ",nombre) AS nombre')])->orderBy('nombre')->get())->pluck("nombre", "id"); 
		$rangos= Average::all();
		return view('formalizacion.index')->with(compact('banco', 'id','rangos'));
	}

	public function add(Request $request)
	{
        $emprendimiento = Entrepreneurship::where('id_emprendedor', $request->id_emprendedor)->first();
		$entrepreneur = Entrepreneur::where('id', $request->id_emprendedor)->first();

		$data= [
			'id_emprendimiento' 	  => $emprendimiento->id,
			'figura_juridica' 		  => $request->figura_juridica,
			'firma_personal' 		  => $request->firma_personal,
			'pyme' 					  => $request->pyme,
			'compania_anonima' 		  => $request->compania_anonima,
			'requiere_financiamiento' => $request->requiere_financiamiento,
			'monto_estimado' 		  => $request->monto_estimado,
			'posee_cuenta' 			  => $request->posee_cuenta,
			'id_banco' 				  => $request->id_banco,
			'id_bancoA' 			  => $request->id_bancoA,
		];	

        $data1= [
			'id_emprendimiento' => $emprendimiento->id,
			'facebook' 		    => $request->facebook,
			'instagram' 		=> $request->instagram,
			'twitter' 			=> $request->twitter,
		];	

		if($request->faov == 'on'){
			$faov = 1;
		}else{
			$faov = 0;
		}
		if($request->inces == 'on'){
			$inces = 1;
		}else{
			$inces = 0;
		}
		if($request->ivss == 'on'){
			$ivss = 1;
		}else{
			$ivss = 0;
		}
		if($request->sumar == 'on'){
			$sumar = 1;
		}else{
			$sumar = 0;
		}
		if($request->otra == 'on'){
			$otra = 1;
		}else{
			$otra = 0;
		}

        $data2= [
			'id_emprendimiento' => $emprendimiento->id,
			'id_promedio' 		=> $request->id_promedio,
			'faov' 		  		=> $faov,
			'inces' 			=> $inces,
			'ivss' 		  		=> $ivss,
			'sumar' 			=> $sumar,
			'otra' 		  		=> $otra
		];

        $imagenes= [
        	'id_emprendimiento' => $emprendimiento->id,
			'registro_mercantil'  => $this->_registro_mercantil($request),
			'cedula' 		  	  => $this->_cedula($request),
			'rif' 				  => $this->_rif($request),
			'certificado_emprende'=> $this->_certificado_emprende($request)
		];

        DB::beginTransaction();
    	try {

    		$legal_data = new LegalData($data);
        	$legal_data->save();

			$social_networks = new SocialNetworks($data1);
	        $social_networks->save();

			$economic_data = new EconomicData($data2);
	        $economic_data->save();

			$image = new Imagen($imagenes);
	        $image->save();


        Mail::to($entrepreneur->correo)->bcc('rapanuti@gmail.com')->send(new ConfirmarRegistro($entrepreneur));

    		Toastr::success("Registro Agregado Correctamente", '¡Bien!');
    		DB::commit();
            return view('welcome');
    	} catch (\Throwable $th) {
            dd($th);
    		Toastr::error('Ocurrió un error, por favor intente de nuevo', '¡Oops!');
    		DB::rollback();
            return redirect()->route('figura-juridica', $request->id_emprendedor);
    	}

	}

	private function _registro_mercantil($imagen)
    {
        if ($imagen->hasFile('registro_mercantil')) {
           $tmp = $imagen->file('registro_mercantil');
           
            if ($tmp->isValid()) {
                $extension = $tmp->extension();
                $nombreArchivo = sprintf('%s.%s', 'registro_mercantil', $extension);
                $this->_eliminarArchivo($nombreArchivo, $imagen->id_emprendedor);
                $ubicacion = $tmp->storeAs(
                    self::UPLOAD_PATH.'/'.$imagen->id_emprendedor,
                    $nombreArchivo
                );
                    $ubicacion1 = $this->separadorDirectorios($ubicacion);			      
            }
        }

        return $ubicacion1;
    }

    private function _cedula($imagen)
    {
        if ($imagen->hasFile('cedula')) {
           $tmp = $imagen->file('cedula');
           
            if ($tmp->isValid()) {
                $extension = $tmp->extension();
                $nombreArchivo = sprintf('%s.%s', 'cedula', $extension);
                $this->_eliminarArchivo($nombreArchivo, $imagen->id_emprendedor);
                $ubicacion = $tmp->storeAs(
                    self::UPLOAD_PATH.'/'.$imagen->id_emprendedor,
                    $nombreArchivo
                );
                    $ubicacion2 = $this->separadorDirectorios($ubicacion);			      
            }
        }

        return $ubicacion2;
    }

    private function _rif($imagen)
    {
        if ($imagen->hasFile('rif')) {
           $tmp = $imagen->file('rif');
           
            if ($tmp->isValid()) {
                $extension = $tmp->extension();
                $nombreArchivo = sprintf('%s.%s', 'rif', $extension);
                $this->_eliminarArchivo($nombreArchivo, $imagen->id_emprendedor);
                $ubicacion = $tmp->storeAs(
                    self::UPLOAD_PATH.'/'.$imagen->id_emprendedor,
                    $nombreArchivo
                );
                    $ubicacion3 = $this->separadorDirectorios($ubicacion);			      
            }
        }

        return $ubicacion3;
    }

    private function _certificado_emprende($imagen)
    {
        if ($imagen->hasFile('certificado_emprende')) {
           $tmp = $imagen->file('certificado_emprende');
           
            if ($tmp->isValid()) {
                $extension = $tmp->extension();
                $nombreArchivo = sprintf('%s.%s', 'certificado_emprende', $extension);
                $this->_eliminarArchivo($nombreArchivo, $imagen->id_emprendedor);
                $ubicacion = $tmp->storeAs(
                    self::UPLOAD_PATH.'/'.$imagen->id_emprendedor,
                    $nombreArchivo
                );
                    $ubicacion4 = $this->separadorDirectorios($ubicacion);			      
            }
        }

        return $ubicacion4;
    }
    private function _eliminarArchivo($nombreArchivo, $id){
        $archivo = self::UPLOAD_PATH.'/'.$id.'/'.$nombreArchivo;
        Storage::disk('public')->delete([$archivo.'.jpg']);
        Storage::disk('public')->delete([$archivo.'.jpeg']);
        Storage::disk('public')->delete([$archivo.'.png']);
        Storage::disk('public')->delete([$archivo.'.gif']);
        Storage::disk('public')->delete([$archivo.'.pdf']);
    }

    public function separadorDirectorios($path){

      return str_replace(['\\','/'], DIRECTORY_SEPARATOR, $path);
    }
}
