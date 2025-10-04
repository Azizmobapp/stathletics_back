<?php

namespace App\Http\Resources\Event;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'year' => $this->year,
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'image_url' => $this->image_url,
            'is_future' => $this->is_future,
        ];
    }
}
