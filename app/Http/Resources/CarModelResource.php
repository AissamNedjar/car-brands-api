<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarModelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'versions_count' => $this->versions->count(),
            'engines_count' => $this->engines->count(),
            'versions' => CarVersionResource::collection($this->whenLoaded('versions')),
            'engines' => CarEngineResource::collection($this->whenLoaded('engines')),
        ];
    }
}
