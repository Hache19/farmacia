<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoproducto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_tipo',
        
    ];
    protected $primaryKey = 'idtipoproducto';

}
