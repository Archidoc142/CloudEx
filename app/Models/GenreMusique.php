<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMusique extends Model
{
    use HasFactory;
    protected $table = 'genre_musiques';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom',
    ];
}
