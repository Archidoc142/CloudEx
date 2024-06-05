<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaisonSerie extends Model
{
    use HasFactory;

    protected $table = 'saison_series';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'id_serie'
    ];

    public function serie(): BelongsTo
    {
        return $this->belongsTo(Serie::class, 'id_serie');
    }
}
