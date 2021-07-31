<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparaciones extends Model
{
    use HasFactory;

    protected $table = 'reparaciones';

    protected $filleable = ['id_reporte','id_solucion','id_ing','fecha_reparacion','comentario'];
}
