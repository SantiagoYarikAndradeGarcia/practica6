<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    /** @use HasFactory<\Database\Factories\HoraFactory> */
    use HasFactory;
    protected $fillable =['horaIni','horaFin'];
    protected $table = 'horas';
}
