<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Carpeta extends Model
{
    use HasFactory;


    public function carpetas(): HasMany
    {
        return $this->hasMany(Carpeta::class,'carpeta_id');
    }

    public function subCarpetas(): HasMany
    {
        return $this->hasMany(Carpeta::class,'carpeta_id')->with('carpetas');
    }

    public function archivos(): HasMany
    {
        return $this->hasMany(Archivo::class,'carpeta_id');
    }
}
