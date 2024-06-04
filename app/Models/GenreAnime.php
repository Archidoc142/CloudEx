<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreAnime extends Model
{
    use HasFactory;
    protected $table = "genre_animes";
    protected $primaryKey = 'id_genre_animes';
    public $timestamps = false;
    protected $fillable = [
        'id_anime',
        'id_genre'
    ];
}
