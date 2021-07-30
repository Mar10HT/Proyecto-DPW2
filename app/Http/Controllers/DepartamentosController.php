<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\DepartamentosDataTable;

class DepartamentosController extends Controller
{
    public function index(DepartamentosDataTable $datatable){
        return $datatable -> render('mostrar.departamento');
    }
}
