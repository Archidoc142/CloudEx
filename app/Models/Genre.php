<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genres';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom',
    ];
}
