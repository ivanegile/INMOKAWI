<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exclusivo extends Model
{
    protected $fillable =['nombre', 'apellido', 'telefono', 'celular', 'opcion', 'seguro', 'presupuesto', 'bancos', 'otro', 'credito'];
}
