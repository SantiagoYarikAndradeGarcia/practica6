<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plaza extends Model
{
    use HasFactory;
    protected $fillable =['idPlaza','nombreplaza'];

    protected $table = 'plazas'; 
    // protected $primaryKey = 'idPlaza';
    // public $incrementing = false;
    
    // protected $keyType = 'string';

    public function personal_plazas():HasMany{
        return $this->hasMany(PersonalPlaza::class);
    }

    // protected static function boot()
    //  {
    //      parent::boot();
     
    //      static::creating(function ($model) {
    //          if (empty($model->idPlaza)) {
    //              $model->idPlaza = substr((string) Str::uuid(), 0, 8);  // Genera un UUID como idPlaza
    //          }
    //      });
    //  }
}
