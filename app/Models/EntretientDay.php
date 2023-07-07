<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EntretientDay extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function participants(): HasMany
    {
        return $this->hasMany(Participant::class, 'entretient_day_id');
    }

    public function scopeDisponibles(Builder $query)
    {
        return $query;
    }
}
