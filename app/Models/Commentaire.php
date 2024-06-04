<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $table = 'commentaires';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'texte',
        'temps',
        'id_utilisateur'
    ];
}
