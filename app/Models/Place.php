<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Place extends ApiModel
{
    /**
     * @return HasMany
     */
    public function Appointment(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     * @return HasMany
     */
    public function slots() : HasMany
    {
        return $this->hasMany(Slot::class);
    }

    /**
     * @return BelongsTo
     */
    public function organizer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
