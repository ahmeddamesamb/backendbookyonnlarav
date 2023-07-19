<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommandeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'etatCommande' => $this->etatCommande,
            'numeroCommande' => $this->numeroCommande,
            'statutCommande' => $this->statutCommande,
            'paiement' => $this->paiement,
            'user_id' => $this->user_id,
            'zone_id' => $this->zone_id,
            'lignCommande_id' => $this->lignCommande_id,
        ];
    }
}
