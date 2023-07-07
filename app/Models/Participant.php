<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participant extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jour_entretient(): BelongsTo
    {
        return $this->belongsTo(EntretientDay::class, 'entretient_day_id');
    }

    public function foods(): HasMany
    {
        return $this->hasMany(FoodParticipant::class);
    }
}
