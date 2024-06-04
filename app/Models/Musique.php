<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
