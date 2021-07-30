<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\RegionDataTable;

class RegionesController extends Controller
{
   public function index(RegionDataTable $dataTable){
       return $dataTable->render('region');
   }
}
