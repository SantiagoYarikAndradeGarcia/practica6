<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personal extends Model
{
    /** @use HasFactory<\Database\Factories\PersonalFactory> */
    use HasFactory;
    protected $fillable =['RFC','nombres','apellidoP','apellidoM','licenciatura','licPasTit','especializacion','espPasTit', 'maestria','maePasTit','doctorado','docPasTit','fechaIngSep','fechaIngIns','depto_id','puesto_id'];
    protected $table = 'personals';
    // protected $primaryKey = 'RFC'; 
    // public $incrementing = false;

    public function depto():BelongsTo{
        // return $this->belongsTo(Depto::class, 'depto_id', 'idDepto');
        return $this->belongsTo(Depto::class, 'depto_id', 'id');
    }

    public function puesto():BelongsTo{
        // return $this->belongsTo(Puesto::class, 'puesto_id', 'idPuesto');
        return $this->belongsTo(Puesto::class, 'puesto_id', 'id');
    }

    public function personal_plazas():HasMany{
        return $this->hasMany(PersonalPlaza::class);
    }
}
