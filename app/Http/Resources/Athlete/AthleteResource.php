<?php

namespace App\Http\Resources\Athlete;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AthleteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'image_path' => $this->image_path,
            'gold' => $this->gold,
            'silver' => $this->silver,
            'bronze' => $this->bronze,
            'city' => $this->city,
            'total' => $this->total,
        ];
    }
}
