<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{

    protected $casts = [
        'started_at' => 'date'
    ];

    public function getImageUrlAttribute(): string
    {
        return Storage::disk('public')->url($this->image_path);
    }

    public function getYearAttribute(): string
    {
        return  $this->started_at->year;
    }


    public function getIsFutureAttribute(): bool
    {
        return  $this->started_at > now();
    }
}
