<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreFilm extends Model
{
    use HasFactory;
    protected $table = "genre_films";
    protected $primaryKey = 'id_genre_film';
    public $timestamps = false;
    protected $fillable = [
        'id_film',
        'id_genre',
    ];
}
