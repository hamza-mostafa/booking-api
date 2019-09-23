<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    /**
     * @return HasMany
     */
    public function places() : HasMany
    {
        return $this->hasMany(Place::class);
    }

    /**
     * @return BelongsTo
     */
    public function organizer() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function team() : BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
