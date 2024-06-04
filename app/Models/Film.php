<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom',
        'temps',
        'id_realisateur'
    ];
}
