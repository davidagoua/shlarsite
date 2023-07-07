<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Food extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function foodParticipant(): HasMany
    {
        return $this->hasMany(FoodParticipant::class);
    }

    public function scopeDisponible(Builder $query)
    {
        return $query;
    }
}
