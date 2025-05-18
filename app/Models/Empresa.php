<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable=[
        'email',
        'telefono',
        'direccion',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'logo',
        'descripcion',
    ];

    public function getFotoLinkAttribute()
    {
        return Storage::url($this->logo);
    }

}
