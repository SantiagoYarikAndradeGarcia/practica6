<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PersonalPlaza extends Model
{
    /** @use HasFactory<\Database\Factories\PersonalPlazaFactory> */
    use HasFactory;
    protected $fillable =['tipoNombramiento','plaza_id','personal_id'];
    protected $table = 'personal_plazas';

    public function personal():BelongsTo{
        return $this->belongsTo(Personal::class,'personal_id', 'id');
    }

    public function plaza():BelongsTo{
        return $this->belongsTo(Plaza::class,'plaza_id', 'id');
    }
}
