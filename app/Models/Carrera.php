<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $fillable =['idCarrera','nombreCarrera','nombreMediano','nombreCorto','depto_id'];
    protected $table = 'carreras';
    protected $primaryKey = 'idCarrera'; 

    public $incrementing = false;
    
    public function alumnos():HasMany{
        return $this->hasMany(Alumno::class);
    }

    public function depto():BelongsTo{
        return $this->belongsTo(Depto::class, 'depto_id', 'idDepto');
    }
}
