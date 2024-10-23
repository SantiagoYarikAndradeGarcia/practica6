<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materia extends Model
{
    /** @use HasFactory<\Database\Factories\MateriaFactory> */
    use HasFactory;
    protected $fillable =['idMateria','nombreMateria','nombreMediano','nombreCorto','nivel','modalidad','reticula_id'];
    protected $table = 'materias';
    protected $primaryKey = 'idMateria'; 

    public $incrementing = false;
    
    // public function horariosMateria():HasMany{
    //     return $this->hasMany(horariosMateria::class);
    // }

    public function reticula():BelongsTo{
        return $this->belongsTo(Reticula::class, 'reticula_id', 'idReticula');
    }
}
