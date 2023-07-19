<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantite',
        'prix',
    ];

    public function commandes(): HasMany
    {
        return $this->hasMany(Commade::class);
    }
    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }
}
