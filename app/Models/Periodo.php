<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    /** @use HasFactory<\Database\Factories\PeriodoFactory> */
    use HasFactory;
    protected $fillable =['idPeriodo','periodo','descCorta','fechaIni','fechaFin'];
    protected $table = 'periodos';
    protected $primaryKey = 'idPeriodo'; 

    public $incrementing = false;
}
