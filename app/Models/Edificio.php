<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    /** @use HasFactory<\Database\Factories\EdificioFactory> */
    use HasFactory;
    protected $fillable =['nombreEdificio','nombreCorto'];
    protected $table = 'edificios';

    public function lugares():HasMany{
        return $this->hasMany(Lugar::class);
    }
}
