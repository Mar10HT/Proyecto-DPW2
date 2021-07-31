<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\IngenierosDataTable;

class IngenierosController extends Controller
{
    public function index(IngenierosDataTable $datatable)
    {
        return $datatable -> render('mostrar.ingenieros');
    }
}
