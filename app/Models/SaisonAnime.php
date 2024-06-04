<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaisonAnime extends Model
{
    use HasFactory;

    protected $table = 'saison_animes';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'id_anime'
    ];
}
