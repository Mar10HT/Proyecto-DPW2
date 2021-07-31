<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ReparacionesDataTable;

class ReparacionesController extends Controller
{
    public function index(ReparacionesDataTable $datatable){
        return $datatable -> render('mostrar.reparaciones');
    }
}
