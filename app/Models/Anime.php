<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $table = 'animes';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom',
    ];
}
