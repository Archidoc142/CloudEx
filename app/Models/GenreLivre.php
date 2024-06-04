<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreLivre extends Model
{
    use HasFactory;
    protected $table = "genre_livres";
    protected $primaryKey = 'id_genre_livre';
    public $timestamps = false;
    protected $fillable = [
        'id_livre',
        'id_genre'
    ];
}
