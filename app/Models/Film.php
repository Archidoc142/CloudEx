<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom',
        'temps',
        'id_realisateur'
    ];

    public function realisateur(): BelongsTo
    {
        return $this->belongsTo(Realisateur::class, 'id_realisateur');
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'genre_films', 'id_film', 'id_genre');
    }
}
