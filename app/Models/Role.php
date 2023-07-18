<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'isactive',

    ];
    protected $casts = [
        'libelle' => 'boolean',
        'isactive' => 'boolean',
    ];

    public function users():HasMany{
        return $this->hasMany(User::class);
    }
}
