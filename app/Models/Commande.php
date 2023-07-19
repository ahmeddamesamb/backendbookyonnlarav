<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'etatCommande',
        'numeroCommande',
        'statutCommande',
        'paiement',
        'user_id',
        'zone_id',
        'lignCommande_id',

    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function lignCommande(): BelongsTo
    {
        return $this->belongsTo(lignCommande::class);
    }

    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }
}
