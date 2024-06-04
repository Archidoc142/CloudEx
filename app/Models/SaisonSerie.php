<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaisonSerie extends Model
{
    use HasFactory;

    protected $table = 'saison_series';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'id_serie'
    ];
}
