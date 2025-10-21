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
            'gold' => $this->gold ?? 0,
            'silver' => $this->silver ?? 0,
            'bronze' => $this->bronze ?? 0,
            'record' => $this->record ?? 0,
            'city' => $this->city,
            'total' => $this->total,
            'img_url' => $this->img_url,
            'rate' => $this->rate,
        ];
    }
}
