<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodParticipant extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function food(): BelongsTo
    {
        return $this->belongsTo(Food::class);
    }

    public function participant(): BelongsTo
    {
        return $this->belongsTo(Participant::class);
    }
}
