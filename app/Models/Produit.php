<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'description',
        'libelle',
        'categorie',
        'prix',
        'etatProduit',
        'quantiteStock',
        'lignCommande_id',
        'user_id',

    ];

    public function lignCommande(): BelongsTo
    {
        return $this->belongsTo(lignCommande::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class);
    }
}
