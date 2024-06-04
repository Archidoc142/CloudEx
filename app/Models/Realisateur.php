<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisateur extends Model
{
    use HasFactory;

    protected $table = 'realisateurs';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom'
    ];
}
