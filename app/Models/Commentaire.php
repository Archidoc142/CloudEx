<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }
}
