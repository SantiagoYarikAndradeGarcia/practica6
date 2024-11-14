<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lugar extends Model
{
    /** @use HasFactory<\Database\Factories\LugarFactory> */
    use HasFactory;
    protected $fillable =['nombreLugar','nombreCorto','edificio_id'];
    protected $table = 'lugars';

    public function edificio():BelongsTo{
        // return $this->belongsTo(Depto::class, 'depto_id', 'idDepto');
        return $this->belongsTo(Edificio::class, 'edificio_id', 'id');
    }
}
