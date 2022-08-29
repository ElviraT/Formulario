<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
use App\Models\Bank;
use App\Models\Average;
use Toastr;

use DB;

class Section3Controller extends Controller
{
    public function index($id)
	{
		$banco=Collection::make(Bank::select(['id', DB::raw('CONCAT(codigo, " - ",nombre) AS nombre')])->orderBy('nombre')->get())->pluck("nombre", "id"); 
		$rangos= Average::all();
		return view('formalizacion.index')->with(compact('banco', 'id','rangos'));
	}
}
