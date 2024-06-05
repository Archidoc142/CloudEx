<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Musique extends Model
{
    use HasFactory;
    protected $table = 'musiques';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom',
        'id_genre_musique'
    ];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(GenreMusique::class, 'id_genre_musique');
    }
}
