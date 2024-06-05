<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $table = 'livres';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom'
    ];

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'genre_livres', 'id_livre', 'id_genre');
    }
}
