<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reticula extends Model
{
    /** @use HasFactory<\Database\Factories\ReticulaFactory> */
    use HasFactory;
    protected $fillable =['descripcion','fechaEnVigor','carrera_id'];
    protected $table = 'reticulas'; // Nombre de la tabla
    // protected $primaryKey = 'idReticula'; // Cambia 'id' por tu clave primaria
    // public $incrementing = false;

    public function materias():HasMany{
        return $this->hasMany(Materia::class);
    }

    public function carrera():BelongsTo{
        return $this->belongsTo(Carrera::class,'carrera_id', 'id');
    }
}
