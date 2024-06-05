<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $table = 'series';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom',
    ];

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'genre_series', 'id_serie', 'id_genre');
    }
}
