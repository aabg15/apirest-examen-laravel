<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculosInspecciones extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_inspeccion',
        'id_vehiculo'
    ];
}
