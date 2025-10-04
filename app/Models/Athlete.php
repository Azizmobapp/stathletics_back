<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    public function getTotalAttribute(): int
    {
        return $this->gold + $this->silver + $this->bronze;
    }

    public function getNameAttribute(): string
    {
        return implode(' ', [$this->first_name, $this->second_name, $this->third_name]);
    }
}
