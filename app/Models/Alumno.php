<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable =['noctrl','nombre','apellidoP','apellidoM','sexo','email','carrera_id'];
    protected $table = 'alumnos'; 
    //protected $primaryKey = 'noctrl'; 
    // public $incrementing = false;

    public function carrera():BelongsTo{
        return $this->belongsTo(Carrera::class,'carrera_id', 'id');
    }
}
