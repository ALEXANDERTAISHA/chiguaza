<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Autoridad extends Model
{
    use HasFactory;
    protected $fillable=[
        'foto',
        'foto2',
        'url_video',
        'nombres_completos',
        'rol',
        'frase',
        'logro_1',
        'logro_2',
        'logro_3',
        'logro_4',
        'anio_experiencia',
    ];

    public function getFondoLinkAttribute()
    {
        return Storage::url($this->foto);
    }
}
