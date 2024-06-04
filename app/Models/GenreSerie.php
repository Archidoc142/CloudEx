<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreSerie extends Model
{
    use HasFactory;
    protected $table = "genre_series";
    protected $primaryKey = 'id_genre_series';
    public $timestamps = false;
    protected $fillable = [
        'id_serie',
        'id_genre'
    ];
}
