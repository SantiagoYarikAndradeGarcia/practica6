<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Puesto extends Model
{
    use HasFactory;
    protected $fillable =['idPuesto','nombre','tipo'];

    protected $table = 'puestos'; // Nombre de la tabla
    // protected $primaryKey = 'idPuesto'; 
    // public $incrementing = false;
    // protected $keyType = 'string';

    public function personals():HasMany{
        return $this->hasMany(Personal::class);
    }
}
