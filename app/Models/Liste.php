<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Liste extends Model
{
    use HasFactory;
    protected $table = 'listes';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'nom',
        'id_utilisateur',
        'id_type',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'id_type');
    }
}
