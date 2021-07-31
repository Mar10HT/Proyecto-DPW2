<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soluciones extends Model
{
    use HasFactory;
    
    protected $table = "soluciones";
    
    protected $filleable = ["materiales", "soluciones"];
}
