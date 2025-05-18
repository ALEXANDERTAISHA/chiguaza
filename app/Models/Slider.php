<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory;

    protected $fillable=[
        'titulo_1',
        'titulo_2',
        'descripcion',
        'url_explorar_mas',
        'fondo',
    ];
    
    public function getFondoLinkAttribute()
    {
        return Storage::url($this->fondo);
    }
}
