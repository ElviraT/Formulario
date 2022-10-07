<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
use App\Models\Entrepreneur;

use Toastr;

class ReporteGeneralController extends Controller
{
    public function index()
    {
        $emprendedores = Entrepreneur::paginate(5);
        return view('reporte.index')->with(compact('emprendedores'));
    }
}
