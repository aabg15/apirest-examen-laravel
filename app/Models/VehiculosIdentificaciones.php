<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculosIdentificaciones extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_identificador',
        'id_vehiculo',
        'fecha_inspeccion',
        'kminspeccion',
        'presion',
        'estado',
        'accesibilidad',
        'observacion'
    ];
}
