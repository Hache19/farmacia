<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_personal',
        'apellido_personal',
        'ci',
        'fecha_nac',
        'celular',
        'genero',
        'idrol'
    ];
    protected $primaryKey = 'idpersonal';
}
