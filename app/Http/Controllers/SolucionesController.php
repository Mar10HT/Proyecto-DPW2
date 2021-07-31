<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\SolucionesDataTables;

class SolucionesController extends Controller
{
    public function index(SolucionesDataTable $datatable){
        return $datatable -> render('mostrar.soluciones');
    }
}
