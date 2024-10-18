<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable =['nombre','apellidoP','apellidoM','sexo'];
    protected $table = 'alumnos'; // Nombre de la tabla
    protected $primaryKey = 'noctrl'; // Cambia 'id' por tu clave primaria

    // Si 'alumno_id' no es autoincremental, agrega esto también:
    public $incrementing = true;

    public function carrera():BelongsTo{
        return $this->belongsTo(Carrera::class);
    }
}
