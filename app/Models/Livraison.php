<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $fillable = [
        'telephoneLivraison',
        'etatLivraison',
        'zone_id',

    ];
    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }
}
