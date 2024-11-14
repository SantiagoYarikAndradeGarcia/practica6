<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depto extends Model
{
    use HasFactory;
    protected $fillable =['idDepto','nombreDepto','nombreMediano','nombreCorto'];
    protected $table = 'deptos';
    // protected $primaryKey = 'idDepto'; 
    // public $incrementing = false;

    public function carreras():HasMany{
        return $this->hasMany(Carrera::class);
    }

    public function personals():HasMany{
        return $this->hasMany(Personal::class);
    }
}
