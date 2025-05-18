<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuejaSugerencia extends Model
{
    use HasFactory;

    protected $fillable=[
        'email',
        'cedula',
        'apellidosnombres',
        'telefonocelular',
        'quejasugerencia',
        'dependencia',
        'descripcion',
    ];
    
}
