<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'coutLivraison',
        'etatZone',

    ];
    public function commandes(): HasMany
    {
        return $this->hasMany(Commade::class);
    }
    public function livraison(): HasMany
    {
        return $this->hasMany(livraison::class);
    }
}
