<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProduitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'image' => $this->image,
            'description' => $this->description,
            'libelle' => $this->libelle,
            'categorie' => $this->categorie,
            'prix' => $this->prix,
            'etatProduit' => $this->etatProduit,
            'quantiteStock' => $this->quantiteStock,
            'lignCommande_id' => $this->lignCommande_id,
            'user_id' => $this->user_id,
        ];
    }
}
