<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Noticia extends Model
{
    use HasFactory;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getFotoLinkAttribute(): string
    {
        $path = trim((string) $this->foto);

        if ($path === '') {
            return asset('assets/images/blog/news-1-1.jpg');
        }

        if (Str::startsWith($path, ['http://', 'https://'])) {
            return $path;
        }

        // Rutas guardadas directamente en public/ (nuevo método)
        if (Str::startsWith($path, 'uploads/')) {
            return asset($path);
        }

        // Rutas antiguas: public/noticias/ID.ext -> buscar en storage o public
        if (Str::startsWith($path, 'public/')) {
            $subPath = Str::after($path, 'public/');
            // Verificar si existe en public/storage/ (symlink activo)
            if (file_exists(public_path('storage/' . $subPath))) {
                return asset('storage/' . $subPath);
            }
            // Fallback: intentar con storage URL
            return Storage::url($path);
        }

        if (Str::startsWith($path, ['/storage/', 'storage/'])) {
            return asset(ltrim($path, '/'));
        }

        $cleanPath = ltrim($path, '/');

        if (file_exists(public_path($cleanPath))) {
            return asset($cleanPath);
        }

        if (file_exists(public_path('storage/' . $cleanPath))) {
            return asset('storage/' . $cleanPath);
        }

        return asset('assets/images/blog/news-1-1.jpg');
    }
}
