<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LivraisonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'telephoneLivraison' => $this->telephoneLivraison,
            'etatLivraison' => $this->etatLivraison,
            'zone_id' => $this->zoneId,
        ];
    }
}
