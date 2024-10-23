<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Puesto extends Model
{
    use HasFactory;
    protected $fillable =['idPuesto','nombre','tipo'];

    protected $table = 'puestos'; // Nombre de la tabla
    protected $primaryKey = 'idPuesto'; // Cambia 'id' por tu clave primaria

    // Si no es autoincremental, agrega esto también:
    public $incrementing = false;
    
    // Si no es de tipo integer, especifica el tipo de dato:
    protected $keyType = 'string';
}
